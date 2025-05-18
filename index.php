<?php include 'includes/header.php'; ?>

<div class="row justify-content-center">    <div class="col-md-10">
        <div class="text-center mb-5">
            <h1 class="display-4" style="color: var(--accent-yellow);">Mathematical Algorithms</h1>
            <p class="lead" style="color: var(--bright-yellow);">Explore different mathematical concepts and algorithms</p>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Collatz Sequence</h5>
                        <p class="card-text">Calculate the Collatz sequence for any positive integer.</p>
                        <a href="collatz.php" class="btn btn-primary">Try it</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Fibonacci Sequence</h5>
                        <p class="card-text">Generate Fibonacci numbers up to a specified term.</p>
                        <a href="fibonacci.php" class="btn btn-primary">Try it</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Euclidean Algorithm</h5>
                        <p class="card-text">Find the greatest common divisor (GCD) of two numbers.</p>
                        <a href="euclidean.php" class="btn btn-primary">Try it</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Tribonacci Sequence</h5>
                        <p class="card-text">Generate Tribonacci numbers where each number is the sum of the last three numbers.</p>
                        <a href="tribonacci.php" class="btn btn-primary">Try it</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Lucas Numbers</h5>
                        <p class="card-text">Generate Lucas numbers, a sequence similar to Fibonacci but starting with 2 and 1.</p>
                        <a href="lucas.php" class="btn btn-primary">Try it</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Pascal's Triangle</h5>
                        <p class="card-text">Generate Pascal's triangle with binomial coefficients.</p>
                        <a href="pascal.php" class="btn btn-primary">Try it</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
