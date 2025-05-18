<?php include 'includes/header.php'; ?>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header header-text">
                <h2 class="text-center mb-0">GCD Calculator</h2>
                <p class="text-center text-muted mb-0 mt-2">Find the Greatest Common Divisor using Euclidean algorithm</p>
            </div>
            <div class="card-body">
                <form method="post" class="needs-validation" novalidate>
                    <div class="mb-3">
                        <label for="first" class="form-label">First Number:</label>
                        <input type="number" class="form-control" id="first" name="first" required min="1" value="<?php echo isset($_POST['first']) ? htmlspecialchars($_POST['first']) : ''; ?>">
                        <div class="invalid-feedback">Please enter a positive integer.</div>
                    </div>
                    <div class="mb-3">
                        <label for="second" class="form-label">Second Number:</label>
                        <input type="number" class="form-control" id="second" name="second" required min="1" value="<?php echo isset($_POST['second']) ? htmlspecialchars($_POST['second']) : ''; ?>">
                        <div class="invalid-feedback">Please enter a positive integer.</div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Calculate GCD</button>
                    </div>
                </form>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['first']) && isset($_POST['second'])) {
                    $originalA = intval($_POST['first']);
                    $originalB = intval($_POST['second']);
                    
                    if ($originalA <= 0 || $originalB <= 0) {
                        echo '<div class="alert alert-danger mt-3">Both numbers must be positive</div>';
                    } else {
                        $a = $originalA;
                        $b = $originalB;
                        $steps = array();
                        
                        echo '<div class="mt-4">';
                        echo '<h4>Result:</h4>';
                        echo '<div class="result-box p-3 bg-light rounded">';
                        echo '<p class="mb-2">Euclidean Algorithm Steps:</p>';
                        echo '<p class="mb-2">Finding GCD of ' . $originalA . ' and ' . $originalB . ':</p>';
                        
                        // Calculate GCD and store steps
                        while ($b != 0) {
                            echo 'gcd(' . $a . ', ' . $b . ') = ';
                            $remainder = $a % $b;
                            echo 'gcd(' . $b . ', ' . $remainder . ')<br>';
                            $a = $b;
                            $b = $remainder;
                        }
                        
                        echo '<p class="mt-3 mb-0">Result: gcd(' . $originalA . ', ' . $originalB . ') = ' . $a . '</p>';
                        echo '</div></div>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
