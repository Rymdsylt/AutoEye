<?php include 'includes/header.php'; ?>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header header-text">
                <h2 class="text-center mb-0">Pascal's Triangle</h2>
                <p class="text-center mb-0 mt-2">Generate Pascal's triangle where each number is the sum of the two numbers above it</p>
            </div>
            <div class="card-body">
                <form method="post" class="needs-validation" novalidate>
                    <div class="mb-3">
                        <label for="rows" class="form-label">Enter number of rows:</label>
                        <input type="number" class="form-control" id="rows" name="rows" required min="1" value="<?php echo isset($_POST['rows']) ? htmlspecialchars($_POST['rows']) : ''; ?>">
                        <div class="invalid-feedback">Please enter a positive number.</div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Generate</button>
                    </div>
                </form>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['rows'])) {
                    $rows = intval($_POST['rows']);
                    if ($rows < 1) {
                        echo '<div class="alert alert-danger mt-3">Number must be greater than or equal to 1</div>';
                    } else {
                        echo '<div class="mt-4">';
                        echo '<h4>Result:</h4>';
                        echo '<div class="result-box p-3 bg-light rounded text-monospace">';
                          for ($i = 0; $i < $rows; $i++) {
                            echo str_repeat('&nbsp;&nbsp;', $rows - $i - 1);
                            
                            $num = 1;
                            for ($j = 0; $j <= $i; $j++) {

                                echo $num . str_repeat('&nbsp;&nbsp;&nbsp;', 1);
                                $num = $num * ($i - $j) / ($j + 1);
                            }
                            echo '<br>';
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
