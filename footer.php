
<style>
    footer {
        background: rgba(30, 31, 56, 0.7);
        color: #fff;
        display: flex;
        justify-content: space-around;
        padding: 25px 0;
    }
    .footUn {
        display: flex;
        flex-direction: column;
        gap: 25px;
    }
    .imgfoot {
        width: max-content;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 5px;
        transition: 0.2s;
    }
    .imgfoot:hover {
        gap: 10px;
        transform: scale(1.05);
        /* width: max-content; */
    }
    .imgfoot img {
        width: 35px;
    }
    .footUn p, .footDeux p, .footTrois p {
        font-family: Octin;
        font-size: 17px;
        letter-spacing: 1px;
    }
    .footDeux, .footTrois {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
    .footDeux ul {
        list-style: none;
        display: flex;
        flex-direction: column;
        gap: 15px;
    }
    .footDeux li {
        width: max-content;
    }
    .footDeux a {
        width: max-content;
        font-family: Montserrat;
        color: #fff;
        letter-spacing: 1px;
        opacity: 0.8;
        transition: 0.3s;
    }
    .footDeux a:hover {
        opacity: 1;
    }
    .footDeux a::after {
        content: '';
        display: block;
        margin: auto;
        height: 2px;
        background: #caa;
        width: 15px;
        opacity: 0.3;
        transition: 0.3s;
    }
    .footDeux a:hover::after {
        width: 85%;
        opacity: 1;
    }
    .footLinks {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }
    .footLinks a {
        display: flex;
        align-items: center;
        gap: 7px;
        color: #fff;
    }
    .footLinks img {
        width: 30px;
    }
    .footLinks span {
        font-family: Montserrat;
        font-size: 14px;
        letter-spacing: 1px;
    }

    @media screen and (max-width: 500px) {
        footer {
            display: grid;
            grid-template-columns: auto auto;
        }
        .footUn {
            margin-bottom: 80px;
        }
    }
</style>

<footer>
    <div class="footUn">
        <div class="imgfoot">
            <img src="images/iconf1.png" alt="">
            <img src="images/iconf2.png" alt="">
            <img src="images/iconf3.png" alt="">
            <img src="images/iconf4.png" alt="">
        </div>
        <p>The supplies</p>
    </div>
    <div class="footDeux">
        <p>Liens</p>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="shop.php">Boutique</a></li>
            <li><a href="apropos.php">À propos</a></li>
            <li><a href="connexion.php">Connexion</a></li>
        </ul>
    </div>
    <div class="footTrois">
        <p>Contacts</p>
        <div class="footLinks">
            <a href="">
                <img src="images/icon-appel.png" alt="" title="Contact">
                <span>+1 234 567 890</span>
            </a>
            <a href="">
                <img src="images/icon-facebook.png" alt="" title="Facebook">
                <span>Facebook</span>
            </a>
            <a href="">
                <img src="images/icon-whatsapp.png" alt="" title="Whatsapp">
                <span>Whatsapp</span>
            </a>
            <a href="">
                <img src="images/icon-twitter.png" alt="" title="Twitter">
                <span>Twitter</span>
            </a>
        </div>
    </div>
</footer>
