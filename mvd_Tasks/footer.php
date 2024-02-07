</div>
 </div>


    <footer class="row">
        <div class = "col-md-4"> Madusha Dissanayaka</div>
        <div class = "col-md-4">Web Programming</div>
        <div class = "col-md-4">2024</div>

        <?php
        // Get the file name using basename and $_SERVER['PHP_SELF']
            $file_name = basename($_SERVER['PHP_SELF']);

        // Get the last modification time of the file
            $last_modified_time = filemtime($file_name );

        // Display the file name and last modified time 
            echo "File: " . $file_name . "\n";
            echo "Last modified on: " . date("l, dS F, Y, h:ia", $last_modified_time) . "\n";
        ?>
    </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>   
</body>
</html>