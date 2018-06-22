<?php require_once ('header-dg.php');
get_header('ezor');?>

<link rel = "stylesheet" href = "css/myproject.css">

<div class = "container-fluid">
    <div class = "container-myproject">
        <div class = "myproject-page">
            <div class = "myproject-page-heading ezor">
                <span class = "heading-right"> פרטי חשבון שלי</span>
                <span class = "heading-left delete"><img src = "img/ezor-user.png">  <strong>מחק חשבון</strong> </span>
            </div>
            <div class = "ezor-item-row">
                <div class = "ezor-item">
                    <label class = "req">שם פרטי</label>
                    <input placeholder="אייל">
                </div>
                <div class = "ezor-item">
                    <label class = "req"> שם משפחה</label>
                    <input placeholder="רחמים">
                </div>
                <div class = "ezor-item">
                    <label class = "req"> דואר אלקטרונטי</label>
                    <input placeholder="eyal@digitouch.co.il">
                </div>
                <div class = "ezor-item">
                    <label class = "req"> נייד</label>
                    <input placeholder="054-6329023">
                </div>
            </div>
            <div class = "ezor-item-row">
                <div class = "ezor-item">
                    <label>תפקיד</label>
                    <input placeholder="מעצב פנים">
                </div>
                <div class = "ezor-item">
                    <label> שם החברה</label>
                    <input placeholder="מאמון">
                </div>
                <div class = "ezor-item long">
                    <label>כתובת</label>
                    <input placeholder="">
                </div>
            </div>
            <div class = "ezor-item-row">
                <div class = "ezor-item small">
                    <label>מיתוג אישי</label>
                    <input placeholder="בחר קובץ לוגו">
                    <div class = "input-button">בחר</div>
                </div>
            </div>

            <div class = "ezor-item-row buttons">
                <div class = "ezor-item-button active">
                      שמור שינוים<img src = "img/modal-button-angle.png">
                </div>
                <div class = "ezor-item-button">
                     ביטול<img src = "img/ezor-angle-blue.png">
                </div>
            </div>
        </div>

        <div class="myproject-sidebar">
            <div class = "sidebar-item wh change-pass">
                <span>שינוי סיסמה</span> <img src = "img/ezor-lock.png">
            </div>
            <div class = "sidebar-item wh create-new">
                <span>פרוייקטים שלי</span> <img src = "img/ezor-folder.png">
            </div>
            <div class = "sidebar-item wh logout">
                <span>יציאה מהחשבון</span> <img src = "img/ezor-exit.png">
            </div>
        </div>
    </div>
</div>

<div id = "change-pass" class = "modal-dg">
    <div class = "modal-body-dg">
        <div class = "modal-body-close-dg"><img src = "img/modal-body-close-dg.png"></div>

        <div class = "modal-title-dg">
שינוי סיסמה
        </div>
        <div class = "modal-separator">
            <div class = "modal-line"></div>
            <div class = "modal-sep-image">
                <img src = "img/ezor-lock-active.png">
            </div><div class = "modal-line"></div>
        </div>
        <div class = "modal-input">
            <div class = "modal-label"><span>*</span>סיסמה ישנה</div>
            <input>
        </div>
        <div class = "modal-input">
            <div class = "modal-label"><span>*</span>סיסמה חדשה</div>
            <input>
        </div>

        <div class = "modal-input">
            <div class = "modal-label"><span>*</span>אשר סיסמא חדשה</div>
            <input>
        </div>
        <div class = "modal-buttons">
            <div class = "modal-button active">
 שמור               <img src = "img/modal-button-angle.png">
            </div>
            <div class = "modal-button">
ביטול<img src = "img/modal-button-close.png">
            </div>
        </div>
    </div>
</div>

<div id = "logout" class = "modal-dg">
    <div class = "modal-body-dg">
        <div class = "modal-body-close-dg"><img src = "img/modal-body-close-dg.png"></div>

        <div class = "modal-title-dg">
יציאה מהחשבון
        </div>
        <div class = "modal-separator">
            <div class = "modal-line"></div>
            <div class = "modal-sep-image">
                <img src = "img/ezor-exit-active.png">
            </div><div class = "modal-line"></div>
        </div>
            <div class = "modal-description-delete">
האם ברצונך לצאת מהחשבון?
        </div>
        <div class = "modal-buttons">
            <div class = "modal-button active">
יציאה               <img src = "img/modal-button-angle.png">
            </div>
            <div class = "modal-button">
ביטול<img src = "img/modal-button-close.png">
            </div>
        </div>
    </div>
</div>

<div id = "delete" class = "modal-dg">
    <div class = "modal-body-dg">
        <div class = "modal-body-close-dg"><img src = "img/modal-body-close-dg.png"></div>

        <div class = "modal-title-dg">
מחק חשבון
        </div>
        <div class = "modal-separator">
            <div class = "modal-line"></div>
            <div class = "modal-sep-image">
                <img src = "img/exor-user-active.png">
            </div><div class = "modal-line"></div>
        </div>
            <div class = "modal-description-delete">
האם ברצונך למחוק את החשבון?
        </div>
        <div class = "modal-buttons">
            <div class = "modal-button active">
מחק חשבון               <img src = "img/modal-button-angle.png">
            </div>
            <div class = "modal-button">
ביטול<img src = "img/modal-button-close.png">
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>
<script src = "js/myprojects.js"></script>