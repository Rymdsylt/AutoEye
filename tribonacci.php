<?php include 'includes/header.php'; ?>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header header-text">
                <h2 class="text-center mb-0">Tribonacci Sequence Calculator</h2>
                <p class="text-center mb-0 mt-2">Generate numbers where each is the sum of the previous three numbers</p>
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
                        $a = '0';  // First Tribonacci number
                        $b = '1';  // Second Tribonacci number
                        $c = '1';  // Third Tribonacci number
                        
                        $sequence[] = $a;
                        $sequence[] = $b;
                        $sequence[] = $c;
                        
                        for ($i = 3; $i < $n; $i++) {
                            $next = bcadd(bcadd($a, $b), $c);
                            $sequence[] = $next;
                            $a = $b;
                            $b = $c;
                            $c = $next;
                        }
                        
                        echo '<div class="mt-4">';
                        echo '<h4>Result:</h4>';
                        echo '<div class="result-box p-3 bg-light rounded">';
                        echo '<p class="mb-2">Tribonacci Numbers:</p>';
                        
                        // Format sequence with 5 numbers per line (matching Android)
                        $formattedSequence = array_chunk($sequence, 5);
                        foreach ($formattedSequence as $index => $chunk) {
                            echo implode(', ', $chunk);
                            if ($index < count($formattedSequence) - 1) {
                                echo '<br>';
                            }
                        }
                        
                        echo '</div></div>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
