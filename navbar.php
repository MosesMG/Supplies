
<style>
    .active {
        color: #fa5 !important;
    }
    .active::after {
        background: #fa5 !important;
    }
    * {
        margin: 0;
        padding: 0;
    }
    a {
        text-decoration: none;
    }
    nav {
        position: absolute;
        z-index: 5;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 7px 15px;
        color: #fff;
        background: rgba(0, 0, 0, 0.6);
        backdrop-filter: blur(1px);
    }
    nav p {
        font-family: Octin;
        font-size: 37px;
        font-weight: bold;
        letter-spacing: 2px;
    }
    .navLinks {
        list-style: none;
        display: flex;
        gap: 40px;
    }
    .navLinks a {
        color: #fff;
        font-family: Alex;
        font-size: 23px;
        font-weight: bold;
        letter-spacing: 1px;
        text-transform: capitalize;
    }
    /* .navLinks a:hover{} */
    .navLinks a::after {
        content: '';
        display: block;
        height: 3px;
        border-radius: 25%;
        background: #fff;
        width: 15px;
        margin: auto;
        opacity: 0.2;
        transition: 0.5s;
    }
    .navLinks a:hover::after {
        opacity: 1;
        width: 90%;
    }
    .icomenu {
        width: 40px;
        display: none;
        cursor: pointer;
    }
    
    @media screen and (max-width: 925px) {
        .icomenu {
            display: block;
            transition: 0.3s ease;
        }
        .navLinks {
            position: absolute;
            flex-direction: column;
            inset: 58px 0 auto auto;
            gap: 25px;
            align-items: center;
            padding: 15px 20px;
            background: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(25px);
            transform: translateY(-150%);
            transition: 0.7s;
        }
        .icomenu.select {
            transform: scale(0.9);
            border: 1px dotted #fff;
            padding: 1px;
        }
        .navLinks.select {
            transform: translateY(0);
        }
    }

</style>


<nav>
    <p>The SUPPLIES</p>
    <ul class="navLinks">
        <li>
            <a href="index.php" <?php if ($link === 'home'): ?> class="active" <?php endif; ?> >accueil</a>
        </li>
        <li>
            <a href="shop.php" <?php if ($link === 'shop'): ?> class="active" <?php endif; ?> >shop</a>
        </li>
        <li>
            <a href="apropos.php" <?php if ($link === 'propos'): ?> class="active" <?php endif; ?> >à propos</a>
        </li>
        <li>
            <?php if(isset($_SESSION['id'])) { ?>
                <a href="disconnect.php" class="active">Déconnexion</a>
            <?php } else { ?>
            <a href="connexion.php" <?php if ($link === 'connexion'): ?> class="active" <?php endif; ?> >connexion</a>
            <?php } ?>
        </li>
    </ul>
    <img src="images/icon-menu.svg" alt="" class="icomenu">
</nav>
