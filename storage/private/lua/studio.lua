
-- Setup studio cmd bar & load core scripts
pcall(function() game:GetService("InsertService"):SetFreeModelUrl("http://www.robloc.icu/Game/Tools/InsertAsset.ashx?type=fm&q=%s&pg=%d&rs=%d") end)
pcall(function() game:GetService("InsertService"):SetFreeDecalUrl("http://www.robloc.icu/Game/Tools/InsertAsset.ashx?type=fd&q=%s&pg=%d&rs=%d") end)

game:GetService("ScriptInformationProvider"):SetAssetUrl("http://www.robloc.icu/Asset/")
game:GetService("InsertService"):SetBaseSetsUrl("http://www.robloc.icu/Game/Tools/InsertAsset.ashx?nsets=10&type=base")
game:GetService("InsertService"):SetUserSetsUrl("http://www.robloc.icu/Game/Tools/InsertAsset.ashx?nsets=20&type=user&userid=%d")
game:GetService("InsertService"):SetCollectionUrl("http://www.robloc.icu/Game/Tools/InsertAsset.ashx?sid=%d")
game:GetService("InsertService"):SetAssetUrl("http://www.robloc.icu/Asset/?id=%d")
game:GetService("InsertService"):SetAssetVersionUrl("http://www.robloc.icu/Asset/?assetversionid=%d")

pcall(function() game:GetService("SocialService"):SetFriendUrl("http://www.robloc.icu/Game/LuaWebService/HandleSocialRequest.ashx?method=IsFriendsWith&playerid=%d&userid=%d") end)
pcall(function() game:GetService("SocialService"):SetBestFriendUrl("http://www.robloc.icu/Game/LuaWebService/HandleSocialRequest.ashx?method=IsBestFriendsWith&playerid=%d&userid=%d") end)
pcall(function() game:GetService("SocialService"):SetGroupUrl("http://www.robloc.icu/Game/LuaWebService/HandleSocialRequest.ashx?method=IsInGroup&playerid=%d&groupid=%d") end)
pcall(function() game:GetService("SocialService"):SetGroupRankUrl("http://www.robloc.icu/Game/LuaWebService/HandleSocialRequest.ashx?method=GetGroupRank&playerid=%d&groupid=%d") end)
pcall(function() game:GetService("SocialService"):SetGroupRoleUrl("http://www.robloc.icu/Game/LuaWebService/HandleSocialRequest.ashx?method=GetGroupRole&playerid=%d&groupid=%d") end)
pcall(function() game:GetService("GamePassService"):SetPlayerHasPassUrl("http://www.robloc.icu/Game/GamePass/GamePassHandler.ashx?Action=HasPass&UserID=%d&PassID=%d") end)
pcall(function() game:GetService("MarketplaceService"):SetProductInfoUrl("https://api.robloc.icu/marketplace/productinfo?assetId=%d") end)
pcall(function() game:GetService("MarketplaceService"):SetDevProductInfoUrl("https://api.robloc.icu/marketplace/productDetails?productId=%d") end)
pcall(function() game:GetService("MarketplaceService"):SetPlayerOwnsAssetUrl("https://api.robloc.icu/ownership/hasasset?userId=%d&assetId=%d") end)

local result = pcall(function() game:GetService("ScriptContext"):AddStarterScript(1) end)
if not result then
  pcall(function() game:GetService("ScriptContext"):AddCoreScript(1,game:GetService("ScriptContext"),"StarterScript") end)
end
