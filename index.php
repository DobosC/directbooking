<?php include 'includes/header.php'; ?>

<main class="main">
    <div class="container">
       <section class="hero__homepage">
            <div class="filter__container">
                <div class="filter__table">
                    <div class="table d-flex flex-column gap-3">
                        <div class="table__row table__choice-main">
                            <div class="table__column">
                                <p class="description">Destinatia:</p>
                                <span class="choice">Provincia Roma </span>
                            </div>
                            <div class="table__column">
                                <p class="description">Hotel:</p>
                                <span class="choice">Nume Hotel </span>
                            </div>
                            <div class="table__column">
                                <p class="description">Data plecare:</p>
                                <span class="choice">20 Iul '24</span>
                            </div>
                            <div class="table__column">
                                <p class="description">Număr nopți:</p>
                                <span class="choice">1 nopți </span>
                            </div>
                            <div class="table__column">
                                <p class="description">Număr adulți & copii:</p>
                                <span class="choice">2 adulți 3 copii </span>
                            </div>
                        </div>

                        <div class="table__row table__choice ">
                            <div class="table__column">
                                <p class="description">Transport:</p>
                            </div>
                            <div class="table__column">
                                <p class="description">Masa:</p>
                            </div>
                            <div class="table__column">
                                <p class="description">Stele:</p>
                            </div>
                            <div class="table__column d-flex">
                                <p class="description">Buget:</p>
                                <div class="amount">
                                    <span class="">Min:</span>
                                    <span class="">100$</span>
                                </div>
                                <div class="amount">
                                    <span class="">Max:</span>
                                    <span class="">2000$</span>
                                </div>
                            </div>
                        </div>

                        <div class="table__row table__tags">
                            <div class="table__column d-flex justify-content-between align-items-center" >
                                <p class="description fw-bolder">Facilități</p>
                                <div class="line"></div>
                                <p class="description">Alege din listă</p>
                            </div>
                      
                            <div class="table__column tag__items d-flex flex-wrap ">
                                <div class="tag__item ">
                                    <p class="tag__text">Parcare gratuită</p>
                                    <span class="tag__close"><img  class="contact__image" src="./assets/icons/x-icon.svg"  width="16" height="16"></span>
                                </div>
                                <div class="tag__item ">
                                    <p class="tag__text">Parcare gratuită</p>
                                    <span class="tag__close"><img  class="contact__image" src="./assets/icons/x-icon.svg"  width="16" height="16"></span>
                                </div>
                               
                            </div>
                        </div>

                        <div class="table__row d-flex justify-content-between table__offers">
                            <div class="table__column d-flex align-items-center table__rating">
                                <img  class="rating__icon" src="./assets/icons/google-icon.svg"  width="26" height="26">
                                <div class="rating__content ">
                                    <img  class="rating__stars" src="./assets/img/rating-stars.png" >
                                    <p  class="rating__text">Peste 3836 recenzii ale clienților</p>
                                </div>
                            </div>
                            <div class="table__column align-items-center d-flex table__offer">
                               <p class="offer__text">Descopera toate cele 23.431.867 oferte</p>
                               <button class="offer__btn">Caută oferte</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="hero__divider">
                <img  class="divider__image" src="./assets/img/wave-divider.png" >
            </div>
       </section>
    </div>
</div>
<?php include 'includes/footer.php'; ?>
