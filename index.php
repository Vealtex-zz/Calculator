<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Javascript Calculator</title>
</head>
<body>

<div class="calculator text-center">
    <h3>
        Javascript Calculator
    </h3>
    <hr>

    <div class="card">



        <div class="card-body text-center">
            <h5 class="card-title" id="calculation">Make a calculation.</h5>
            <h6 class="card-subtitle text-muted" id="owncalc">Otherwise you have to get out of here *yeet*</h6>
        </div>
    </div>

    <div id="error"></div>

    <input type="number" id="number_1" class="form-control mt-3" placeholder="Enter the first number.">

    <input type="number" id="number_2" class="form-control mt-3" placeholder="Enter the second number.">

    <div class="mt-3">
        <select class="custom-select mr-sm-2" id="calTyp">
            <option selected value="undefined">How do you want to calculate the sum?</option>
            <option value="+">Addition (+)</option>
            <option value="-">Subtraction (-)</option>
            <option value="/">Multiplicatio (:)</option>
            <option value="*">division (x)</option>
        </select>
    </div>

    <input type="number" id="number_3" class="form-control mt-3" placeholder="What is your self-calculated outcome?">

    <button type="button" class="btn btn-success btn-lg btn-block mt-3" onclick="CalculationTask()">Calculate the sum</button>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="./app.js" ></script>

</body>
</html>