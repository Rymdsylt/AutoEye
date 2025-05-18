<?php include 'includes/header.php'; ?>



<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header header-text">
                <h2 class="text-center mb-0">Collatz Calculator</h2>
                <p class="text-center mb-0 mt-2">Explore the sequence that always reaches 1: divide by 2 if even, multiply by 3 and add 1 if odd</p>
            </div>
            <div class="card-body">
                <form method="post" class="needs-validation" novalidate>
                    <div class="mb-3">
                        <label for="number" class="form-label">Enter a positive integer:</label>
                        <input type="number" class="form-control" id="number" name="number" required min="1" value="<?php echo isset($_POST['number']) ? htmlspecialchars($_POST['number']) : ''; ?>">
                        <div class="invalid-feedback">Please enter a positive integer.</div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Calculate</button>
                    </div>
                </form>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['number'])) {
                    $n = intval($_POST['number']);
                    if ($n <= 0) {
                        echo '<div class="alert alert-danger mt-3">Number must be positive</div>';
                    } else {
                        $sequence = array();
                        $count = 0;
                        $currentNumber = $n;
                        
                        // Start with the initial number
                        $sequence[] = $currentNumber;
                        
                        while ($currentNumber !== 1) {
                            if ($currentNumber % 2 == 0) {
                                $currentNumber = $currentNumber / 2;
                            } else {
                                $currentNumber = 3 * $currentNumber + 1;
                            }
                            $sequence[] = $currentNumber;
                            $count++;
                        }
                        
                        echo '<div class="mt-4">';
                        echo '<h4>Result:</h4>';
                        echo '<div class="result-box p-3 bg-light rounded">';
                        echo '<p class="mb-2">Collatz sequence starting with ' . $n . ':</p>';
                        echo '<p class="mb-2">Steps to reach 1: ' . $count . '</p>';
                        echo '<p class="mb-0">Sequence: ';
                        
                        // Format sequence with 6 numbers per line
                        $formattedSequence = array_chunk($sequence, 6);
                        foreach ($formattedSequence as $index => $chunk) {
                            echo implode(' → ', $chunk);
                            if ($index < count($formattedSequence) - 1) {
                                echo '<br>';
                            }
                        }
                        
                        echo '</p></div></div>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
