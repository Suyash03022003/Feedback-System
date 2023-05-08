<div class="nav">
    <div class="img">
        <img id="img" src="images/bitlogo_transparent.png" alt="BIT Logo">
    </div>
    <h2 id="heading">Bajaj Institute of Technology</h2>
    <div class="links" id="links">
        <p class="input"><?php echo $fname, " ", $lname; ?></p>
        <div class="account_div" onclick="profileAccount();">
            <img class="account_img" src="images/user.png" alt="User" width="7%" style="border-radius: 50%;">
            <div id="account" class="account">
                <a href="Adminprofile.php">Profile</a><br>
                <a onclick="openPopup()" class="pointer">Log out</a>
            </div>
        </div>
    </div>
</div>
<div class="spaces"></div>