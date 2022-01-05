<?php require_once ('header.php'); ?>

<form action="p-form.php"  method="post">
    <table class="center">
        <tr>
            <th colspan="5"> Please fill the form below  </th>
        </tr>
        <tr>
            <td> <label><b>First Name</b></label></td>
            <td> <input type="text"  name="fname" placeholder="Enter your name" required></td>
        </tr>
        <tr>
            <td> <label><b>Last Name</b></label></td>
            <td> <input type="text" name="lname" placeholder="Enter your name" required></td>
        </tr>
        <tr>
            <td> <label><b>Address</b></label></td>
            <td> <textarea rows="3" cols="50" name="address" placeholder="Enter your address" required></textarea></td>
        </tr>
        <tr>
            <td> <label><b>Email</b></label></td>
            <td> <input type="email" name="email" placeholder="Enter your email" required></td>
        </tr>
        <tr>
            <td> <label><b>Phone Number</b></label></td>
            <td> <input type="number" id="phone" name="phone_num" placeholder="Enter your phone" required></td>
        </tr>
        <tr>
            <td> <label><b>Gender</b></label></td>
            <td> 
                <input type="radio" id="" value="female" name="gender" required> Female 
                <input type="radio" id="" value="male" name="gender" required> Male
            </td>
        </tr>
        <tr>
            <td> <label><b>Favourite Site</b></label></td>
            <td> 
                <input type="checkbox" id="" name="fav_site[]" value="Google"> Google 
                <input type="checkbox" id="" name="fav_site[]" value="UTeM"> UTeM
                <input type="checkbox" id="" name="fav_site[]" value="Facebook"> Facebook
            </td>
        </tr>
        <tr>
            <td> <label><b>Comment</b></label></td>
            <td> <textarea rows="3" cols="50" name="comment" placeholder="Write your comment here ..." required></textarea></td>
        </tr>
            <th colspan="5">
                <button type="submit" >PROCESS FORM</button> 
                <button type="reset" >CLEAR FORM</button>
            </th>
        </tr>
    </table>
</form>

<?php require_once ('footer.php'); ?>