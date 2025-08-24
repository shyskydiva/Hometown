    <div class="footer">
        <footer>
            <?php
                $filename = 'index.php';
                $filename2 = 'comments.php';
                if(file_exists($filename)){
                    echo "Last Updated " . date ("l, F d Y h:ia", filemtime($filename));
                    }
                
                if(file_exists($filename2)){
                    echo "Last Updated " . date ("l, F d Y h:ia", filemtime($filename2));
                    }
            ?>
            &nbsp; &nbsp;
            <p>&copy; 2025 Shyanne Cortes</p>  
        </footer>
    </div>
</body>
</html>