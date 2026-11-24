
<?php
$page_title = 'Apply for Membership';
include 'includes/header.php';
?>

<main>
    <form action="process-register.php" method="post">
    <h2>Apply for membership</h2>

    <p>
        Any dairy farmer on the Kiserian, Ngong, or Rongai routes may
        apply to join Ereteti Dairy Sacco. Please complete all required
        fields below to submit your application.
    </p>


        <fieldset>
            <legend>Your details</legend>

            <label for="first_name">First name</label>
            <input type="text" id="first_name"
                   name="first_name" required>

            <br><br>

            <label for="last_name">Last name</label>
            <input type="text" id="last_name"
                   name="last_name" required>

            <br><br>

            <label for="nationalID">National ID number</label>
            <input type="text" id="nationalID"
                   name="nationalID" required>

            <br><br>

            <label for="phone">Phone number</label>
            <input
                type="tel"
                id="phone"
                name="phone"
                placeholder="07XXXXXXXX"
                pattern="07[0-9]{8}"
                required
            >

        </fieldset>

        <br>

        <fieldset>
            <legend>Your route</legend>

            <label for="route">Route</label>

            <select id="route" name="route" required>
                <option value="">Choose a route</option>
                <option value="1">Kiserian route</option>
                <option value="2">Ngong route</option>
                <option value="3">Rongai route</option>
            </select>

            <br><br>

            <label for="joiningDate">Date of joining</label>

            <input
                type="date"
                id="joiningDate"
                name="joiningDate"
                required
            >

        </fieldset>

        <br>

        <input
            type="checkbox"
            id="acceptRules"
            name="acceptRules"
            value="yes"
            required
        >

        <label for="acceptRules">
            I accept the sacco's rules
        </label>

        <br><br>

        <button type="submit">Apply to join</button>

    </form>

</main>

<?php
include 'includes/footer.php';
?>