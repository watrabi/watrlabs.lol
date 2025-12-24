<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

      :root {
        --body-color: white;
        --nav-color: #289e9f;
        --container-color: #e3e1e1;
        --input-color: #e0e0e0;
        --danger-color: #cc2828;
        --warning-color: #ffc800;
        --sidebar-color: #f1f1f1;
        --primary-color: #1dd0d1;
        --secondary-color: #21afb0;
        --disabled-color: #0b5657;
      }

      * {
        transition: 0.2s;
      }

      html,
      body {
        font-family: "Montserrat", sans-serif;
        padding: 0px;
        margin: 0px;
        background-color: var(--body-color);
        height: 100%;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
      }

      #navbar {
        color: white;
        background-color: var(--nav-color);
        width: 100%;
        height: 45px;
        display: flex;
        flex-direction: row;
        align-content: center;
        justify-content: space-between;
        box-shadow: 5px 5px 5px rgba(15, 15, 15, 0.4);
      }

      #footer {
        color: white;
        background-color: var(--nav-color);
        width: 100%;
        height: 50px;
        display: flex;
        flex-direction: row;
        align-content: center;
        text-align: center;
        box-shadow: 10px 10px 10px 10px rgba(15, 15, 15, 0.5);
      }

      .container {
        display: flex;
        flex-direction: column;
        background-color: --container-color;
        box-shadow: 5px 5px 5px 5px rgba(15, 15, 15, 0.4);
        margin-left: auto;
        margin-right: auto;
      }

      #footer p {
        width: 100%;
      }

      #site-warning {
        align-content: center;
        color: white;
        background-color: var(--danger-color);
        height: 45px;
        width: 100%;
        text-align: left;
        box-shadow: 5px 5px 5px rgba(15, 15, 15, 0.4);
      }

      #site-warning p {
        margin: 0px;
        margin-left: 15px;
      }

      .nav-group {
        padding-left: 15px;
        padding-right: 15px;
        align-content: center;
      }

      .nav-item {
        color: white;
        text-decoration: none;
        align-content: center;
        padding: 5px;
      }

      #sidebar-nav {
        padding-left: 10px;
        padding-right: 5px;
      }

      #main {
        display: flex;
        flex-direction: column;
        width: 100%;
        height: 100%;
      }

      .header {
        margin-left: 20px;
      }

      #sidebar {
        transition: 0.2s;
        z-index: 2;
        width: 250px;
        display: flex;
        position: fixed;
        background-color: var(--sidebar-color);
        height: 100%;
        box-shadow: 5px 5px 5px rgba(15, 15, 15, 0.5);
      }

      .danger {
        background-color: var(--danger-color);
      }

      .warning {
        background-color: var(--warning-color);
      }

      .side-hidden {
        overflow: hidden;
        width: 0px !important;
      }

      .modal-bg {
        transition: 0.5s;
        align-items: center;
        justify-content: center;
        position: fixed;
        background-color: rgba(0, 0, 0, 0.4);
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 999;
      }

      .center {
        text-align: center;
        float: center;
        display: block;
        margin-left: auto;
        margin-right: auto;
      }

      .div-center {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .item-group {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
      }

      @media screen and (max-width: 480px) {
        .item-group {
          flex-direction: column-reverse;
        }
      }

      .item-container {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
      }

      input {
        color: black;
        background-color: var(--input-color);
        border: none;
        padding: 10px;
      }

      .button {
        background-color: var(--primary-color);
      }

      #error-button {
        color: white;
        text-decoration: none;
        padding: 10px;
        margin-right: 5px;
      }

      #error_emoji {
        margin-left: 15px;
      }

      .button:hover {
        background-color: var(--secondary-color);
      }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>outage - watrlabs</title>
  </head>
  <body>
    <div id="navbar"></div>
    <div class="div-center center">
      <div class="item-group">
        <div class="item-container">
          <div style="display: flex;  flex-direction: column;">
            <h1 style="margin-bottom: 0.25rem;">Oh No..</h1>
            <p>The error page had an error...</p>
            <br>
            <div>
              <a id="error-button" class="button" href="#" onclick="history.back();return false;">Try to go back</a>
              <a id="error-button" class="button" href="/">Try to go home</a>
              <br><br>
              <small>(p.s. we might be having an outage)</small>
            </div>
          </div>
        </div>
        <div id="error_emoji">
          <img src="/assets/images/blobs/bloboutage.png" alt="Warning Emoji" title="Warning Emoji" height="179.33" style="margin-left: 20px">
        </div>
      </div>
    </div>
    </div>
  </body>
</html>
</body>
</html>