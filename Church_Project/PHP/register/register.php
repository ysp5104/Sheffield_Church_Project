<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer Register</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
<div id="header">
    <h1>St.Andrew's Church</h1>
    <h1>Room Booking</h1>
</div>

<div id="content">
    <form action="RegisterExecute.php" method="post">
        <fieldset>
            <legend>Register:</legend>
            <div class="information">
                <table align="center">
                    <tr>
                        <td> Group Name: </td>
                        <td><input type="text" name="name" required ></td>
                    </tr>
                    <tr>
                        <td> Account Name(Email Address):</td>
                        <td> <input type="email" name="email" required></td>
                    </tr>
                    <tr>
                        <td> Enter Password: </td>
                        <td><input type="password" name="password" required></td>
                    </tr>
                    <tr>
                        <td>Confirm Password: </td>
                        <td><input type="password" name="confirmPassword" required></td>
                    </tr>
                    <tr>
                        <td> Religion </td>
                        <td> <select name="religion">
                            <option value="None"> None </option>
                            <option value="Christianity"> Christianity </option>
                            <option value="Islam"> Islam </option>
                            <option value="Nonreligious"> Nonreligious </option>
                            <option value="Hinduism"> Hinduism </option>
                            <option value="Buddhism"> Buddhism </option>
                            <option value="Other"> Other </option>
                        </select></td>
                    </tr>
                    <tr>
                        <td colspan="2"> Person 1 (Compulsory)</td>
                    </tr>
                    <tr>
                        <td> Title: </td>
                        <td> <select name="title1">
                            <option value="Mr">Mr</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Miss">Miss</option>
                            <option value="Ms">Ms</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td> Forename: </td>
                        <td><input type="text" name="forname1" required > </td>
                    </tr>
                    <td> Surname: </td>
                    <td><input type="text" name="surname1" required > </td>
                    </tr>
                    <tr>
                        <td> Phone Number: </td>
                        <td> <input type="text" name="phone1" required> </td>
                    </tr>
                    <tr>
                        <td> Email</td>
                        <td> <input type="email" name="email1" required></td>
                    </tr>

                    <tr>
                        <td colspan="2"> Person 2 (Optional)</td>
                    </tr>
                    <tr>
                        <td> Title: </td>
                        <td> <select name="title2">
                            <option value="Mr">Mr</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Miss">Miss</option>
                            <option value="Ms">Ms</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td> Forename: </td>
                        <td><input type="text" name="forname2" > </td>
                    </tr>
                    <td> Surname: </td>
                    <td><input type="text" name="surname2" > </td>
                    </tr>
                    <tr>
                        <td> Phone Number: </td>
                        <td> <input type="text" name="phone2" > </td>
                    </tr>
                    <tr>
                        <td> Email</td>
                        <td> <input type="email" name="email2"></td>
                    </tr>

                    <tr>
                        <td> Other Requirements: </td>
                        <td> <textarea name="message" rows="10" cols="30"> </textarea></td>
                    </tr>

                </table>

                <br> <br>

                <input type="checkbox" name="agree">  I Agree All Terms

                <br><br>
                <input type="submit" value="submit">

              <form action="BookingHomePage.html">
                    <button>Confirm</button>
                </form>
                <p></p>
            </div>
        </fieldset>
    </form>
</div>

</body>
</html>