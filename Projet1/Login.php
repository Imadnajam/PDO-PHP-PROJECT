



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: teal;
            font-size: x-large;
            color: rgb(255, 255, 255);
            font-family: monospace;

        }

        .containere {
            background-color: rgba(0, 0, 0, 0.493);
            width: 530px;
            height: 80vh;
            text-align: center;
            display: flex;
            justify-content: space-around;

            margin-left: 30%;
        }

        #in {
            background-color: rgba(19, 8, 36, 0.493);
            color: white;
            font-size: 1.2rem;
            width: 10cm;
            height: 50px;
        }

        button {
            background-color: rgba(19, 8, 36, 0.493);
            color: white;
            font-size: 1.2rem;
            width: 5cm;
            height: 50px;
            cursor: pointer;
        }

        h3 {
            font-size: 2.5rem;

            text-shadow: 0px 0px 5px, 20px 15px 10px rgba(19, 8, 36, 0.493);
        }

        svg {
            width: 40px;

            height: 40px;
        }
    </style>
</head>

<body>
    <h3>LoGin</h3>
    <div class="containere">
        <form action="Loginverif.php"><br><br><br>
            <div class="items1">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M21.08 8.58V15.42C21.08 16.54 20.48 17.58 19.51 18.15L13.57 21.58C12.6 22.14 11.4 22.14 10.42 21.58L4.47998 18.15C4.00175 17.8727 3.60491 17.4745 3.32933 16.9953C3.05374 16.5161 2.90912 15.9728 2.90998 15.42V8.58C2.90998 7.46 3.50998 6.42 4.47998 5.85L10.42 2.42C11.39 1.86 12.59 1.86 13.57 2.42L19.51 5.85C20.48 6.42 21.08 7.45 21.08 8.58Z"
                        stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M12 11C12.618 11 13.2106 10.7545 13.6476 10.3176C14.0845 9.8806 14.33 9.28795 14.33 8.67C14.33 8.05204 14.0845 7.4594 13.6476 7.02244C13.2106 6.58548 12.618 6.34 12 6.34C11.382 6.34 10.7894 6.58548 10.3524 7.02244C9.91548 7.4594 9.67 8.05204 9.67 8.67C9.67 9.28795 9.91548 9.8806 10.3524 10.3176C10.7894 10.7545 11.382 11 12 11ZM16 16.66C16 14.86 14.21 13.4 12 13.4C9.79 13.4 8 14.86 8 16.66"
                        fill="#D9D9D9" />
                    <path
                        d="M16 16.66C16 14.86 14.21 13.4 12 13.4C9.79 13.4 8 14.86 8 16.66M12 11C12.618 11 13.2106 10.7545 13.6476 10.3176C14.0845 9.8806 14.33 9.28795 14.33 8.67C14.33 8.05204 14.0845 7.4594 13.6476 7.02244C13.2106 6.58548 12.618 6.34 12 6.34C11.382 6.34 10.7894 6.58548 10.3524 7.02244C9.91548 7.4594 9.67 8.05204 9.67 8.67C9.67 9.28795 9.91548 9.8806 10.3524 10.3176C10.7894 10.7545 11.382 11 12 11Z"
                        stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>


                <input id="in" type="number" placeholder="Entrer your identifiant " required name="IdentifiantN">
            </div><br>
            <div class="items2">
                <svg viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10.2687 18.5375V14.4031C10.2687 7.56073 12.3359 2 22.6719 2C33.0078 2 35.075 7.56073 35.075 14.4031V18.5375"
                        stroke="white" stroke-width="3.10078" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M33.0078 43.3438H12.3359C4.06719 43.3438 2 41.2766 2 33.0078V28.8734C2 20.6047 4.06719 18.5375 12.3359 18.5375H33.0078C41.2766 18.5375 43.3438 20.6047 43.3438 28.8734V33.0078C43.3438 41.2766 41.2766 43.3438 33.0078 43.3438Z"
                        stroke="white" stroke-width="3.10078" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M30.9334 30.9406H30.9518" stroke="white" stroke-width="4.13438" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M22.6625 30.9406H22.6811" stroke="white" stroke-width="4.13438" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M14.3918 30.9406H14.4103" stroke="white" stroke-width="4.13438" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>


                <input id="in" name="password" type="password" placeholder="Password" required>
            </div>
            <div class="items3"><input type="checkbox" name="" id="">Remembre Me</div>
            <div class="items4"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8.9 7.55999C9.21 3.95999 11.06 2.48999 15.11 2.48999H15.24C19.71 2.48999 21.5 4.27999 21.5 8.74999V15.27C21.5 19.74 19.71 21.53 15.24 21.53H15.11C11.09 21.53 9.24 20.08 8.91 16.54M2 12H14.88"
                        stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M12.65 8.64999L16 12L12.65 15.35" stroke="white" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <input id="in" type="submit" value="Log In" formmethod="$_POST">
            </div>
            <br><br>
            <div class="items5">
                <hr>
            </div>
            <div class="items6">Don't have an account yet?</div><br>
            <div class="items7"> <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M3.41 22C3.41 18.13 7.26 15 12 15C12.96 15 13.89 15.13 14.76 15.37M12 12C13.3261 12 14.5979 11.4732 15.5355 10.5355C16.4732 9.59785 17 8.32608 17 7C17 5.67392 16.4732 4.40215 15.5355 3.46447C14.5979 2.52678 13.3261 2 12 2C10.6739 2 9.40215 2.52678 8.46447 3.46447C7.52679 4.40215 7 5.67392 7 7C7 8.32608 7.52679 9.59785 8.46447 10.5355C9.40215 11.4732 10.6739 12 12 12Z"
                        stroke="#FFF8F8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M19.49 17.98H16.51M18 16.52V19.51M22 18C22 18.32 21.96 18.63 21.88 18.93C21.79 19.33 21.63 19.72 21.42 20.06C21.0675 20.6525 20.5667 21.143 19.967 21.4831C19.3674 21.8233 18.6894 22.0014 18 22C17.0155 22.0029 16.0659 21.6352 15.34 20.97C15.04 20.71 14.78 20.4 14.58 20.06C14.1993 19.4404 13.9985 18.7272 14 18C13.9994 17.4745 14.1024 16.9541 14.3031 16.4685C14.5039 15.9829 14.7985 15.5417 15.1701 15.1701C15.5417 14.7985 15.9829 14.5039 16.4685 14.3031C16.9541 14.1024 17.4745 13.9993 18 14C19.18 14 20.25 14.51 20.97 15.33C21.61 16.04 22 16.98 22 18Z"
                        stroke="#FFF8F8" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <button> Registre Here <a href="Inscription.php"></a></button>
            </div>

        </form>
    </div>

</body>

</html>

