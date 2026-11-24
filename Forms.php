<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Book a Farm Visit</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 20px;
            color: #222;
        }

        form {
            width: 300px;
            border: 1px solid #777;
            padding: 8px;
        }

        fieldset {
            border: 1px solid #aaa;
            margin-bottom: 6px;
            padding: 8px;
        }

        legend {
            font-weight: bold;
            padding: 0 4px;
        }

        .form-row {
            display: flex;
            align-items: center;
            margin-bottom: 4px;
        }

        .form-row label {
            width: 82px;
        }

        input[type="text"],
        input[type="tel"],
        input[type="email"],
        input[type="date"],
        input[type="time"],
        input[type="number"],
        select {
            width: 125px;
            height: 18px;
            box-sizing: border-box;
            font-size: 11px;
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin: 0 3px 0 0;
            vertical-align: middle;
        }

        .options {
            margin: 4px 0;
        }

        .options label {
            margin-right: 8px;
            white-space: nowrap;
        }

        textarea {
            width: 225px;
            height: 50px;
            resize: none;
            font-size: 11px;
        }

        .urgent {
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .urgent input[type="range"] {
            width: 85px;
        }

        .photo {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        button {
            font-size: 11px;
            padding: 3px 8px;
            margin-right: 5px;
        }
    </style>
</head>

<body>

    <form>

        <h3>Book a farm visit</h3>

        <!-- WHO YOU ARE -->
        <fieldset>

            <legend>Who you are</legend>

            <div class="form-row">
                <label>Member number *</label>
                <input type="text" placeholder="ER-0000">
            </div>

            <div class="form-row">
                <label>Full name *</label>
                <input type="text">
            </div>

            <div class="form-row">
                <label>Phone number *</label>
                <input type="tel" placeholder="07XXXXXXXX">
            </div>

            <div class="form-row">
                <label>Email</label>
                <input type="email">
            </div>

            <div class="form-row">
                <label>Route *</label>

                <select>
                    <option>-- Choose your route --</option>
                    <option>Gatundu North</option>
                    <option>Gatundu South</option>
                    <option>Kamwangi</option>
                </select>
            </div>

        </fieldset>


        <!-- THE VISIT -->
        <fieldset>

            <legend>The visit</legend>

            <div class="form-row">
                <label>Preferred date *</label>
                <input type="text" placeholder="dd/mm/yyyy">
            </div>

            <div class="form-row">
                <label>Preferred time</label>
                <input type="time">
            </div>

            <div class="form-row">
                <label>Number of cows *</label>
                <input type="number" value="1" min="1">
            </div>


            <!-- REASON FOR VISIT -->
            <div>
                <strong>Reason for the visit *</strong>
            </div>

            <div class="options">

                <label>
                    <input type="radio" name="reason">
                    Animal health
                </label>

                <label>
                    <input type="radio" name="reason">
                    Feeding advice
                </label>

                <label>
                    <input type="radio" name="reason">
                    Breeding (AI)
                </label>

                <label>
                    <input type="radio" name="reason">
                    Milk quality
                </label>

            </div>


            <!-- ALSO BRING -->
            <div>
                <strong>Also bring</strong>
            </div>

            <div class="options">

                <label>
                    <input type="checkbox">
                    Mineral licks
                </label>

                <label>
                    <input type="checkbox">
                    Dewormer
                </label>

                <label>
                    <input type="checkbox">
                    Feed sample kit
                </label>

            </div>


            <!-- HOW URGENT -->
            <div class="urgent">

                <strong>How urgent?</strong>

                <span>Not urgent</span>

                <input
                    type="range"
                    min="1"
                    max="5"
                    value="3"
                >

                <span>Very urgent</span>

            </div>


            <!-- PROBLEM -->
            <div style="margin-top: 5px;">
                <label>
                    Describe the problem
                </label>
            </div>

            <textarea></textarea>


            <!-- PHOTO -->
            <div class="photo" style="margin-top: 5px;">

                <label>Photo of the animal</label>

                <input type="file">

            </div>

        </fieldset>


        <!-- BUTTONS -->
        <button type="submit">
            Book the visit
        </button>