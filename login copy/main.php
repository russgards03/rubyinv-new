<div id="wrap">
        <div id="logo2"></div>
        <div id="name">
            <p>Logged in as:</p>
            <?php echo $user -> get_user_access($user_id). ' - '.$user->get_user_lastname($user_id).', '.$user->get_user_firstname($user_id);?>
        </div>

        <form action="logout.php">
            <div id="button-center">
            <input type="submit" value="Logout">
            </div>
        </form>
       
    </div>