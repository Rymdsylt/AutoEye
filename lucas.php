<?php include 'includes/header.php'; ?>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header header-text">
                <h2 class="text-center mb-0">Lucas Sequence Calculator</h2>
                <p class="text-center mb-0 mt-2">Generate Lucas numbers, a sequence similar to Fibonacci but starting with 2 and 1</p>
            </div>
            <div class="card-body">
                <form method="post" class="needs-validation" novalidate>
                    <div class="mb-3">
                        <label for="terms" class="form-label">Enter number of terms (minimum 3):</label>
                        <input type="number" class="form-control" id="terms" name="terms" required min="3" value="<?php echo isset($_POST['terms']) ? htmlspecialchars($_POST['terms']) : ''; ?>">
                        <div class="invalid-feedback">Please enter a number greater than or equal to 3.</div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Calculate</button>
                    </div>
                </form>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['terms'])) {
                    $n = intval($_POST['terms']);
                    if ($n < 3) {
                        echo '<div class="alert alert-danger mt-3">Number must be greater than or equal to 3</div>';
                    } else {
                        // Using BCMath for large numbers (equivalent to BigInteger in Java)
                        $sequence = array();
                        $a = '2';  // First Lucas number
                        $b = '1';  // Second Lucas number
                        
                        $sequence[] = $a;
                        $sequence[] = $b;
                        
                        for ($i = 2; $i < $n; $i++) {
                            $next = bcadd($a, $b);
                            $sequence[] = $next;
                            $a = $b;
                            $b = $next;
                        }
                        
                        echo '<div class="mt-4">';
                        echo '<h4>Result:</h4>';
                        echo '<div class="result-box p-3 bg-light rounded">';
                        echo '<p class="mb-2">Lucas Numbers:</p>';
                          echo implode(', ', $sequence);
                        
                        echo '</div></div>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
