<!DOCTYPE html>
<html lang="zxx" class="no-js">

<header id="header">
    <?php session_start(); ?>
</header>
<br>

<body>
    <section class="section-gap-other-pages">
        <div class="title text-center">

            <h1 style="margin-top: 70px" class="mb-10">Déconnexion</h1>

            <?php

            if(isset($_SESSION["UserId"])){
                session_destroy();
                header("Location: ../index.php?deconnect=ok");
            }
            else{
                header("location: ../index.php");
            }
            include "connectToBDD/conn.php";
            ?>

            </form>
        </div>
    </section>
</body>

</html>
