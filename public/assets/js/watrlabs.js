// Copyright 2025 watrlabs
// if you break it then sd;ojgksdflkhgsgdfhjkl

const sidebar = document.getElementById("sidebar");
const sidebartoggle = document.getElementById("sidebar-nav");
ishidden = sidebar.classList.contains('side-hidden');

function toggleSideBar(){
    if(ishidden){
        sidebar.classList.remove("side-hidden");
        ishidden = sidebar.classList.contains('side-hidden'); // redo it so the user cant break it
    } else {
        sidebar.classList.add("side-hidden");        
        ishidden = sidebar.classList.contains('side-hidden'); 
    }
    
}

sidebartoggle.addEventListener('click', function() {
  toggleSideBar();
});

function showmodal(content){
    const modalbg = document.createElement("div");
    modalbg.classList.add("modal-bg");
    
    const modalcontents = document.createElement("div");
    modalcontents.classList.add("center");
    modalcontents.innerHTML += content
    modalbg.appendChild(modalcontents);
    
    document.body.appendChild(modalbg);
}