
    </head>

<body background="./multimedia/resources/banner-bg.jpg">
             <!-- header -->
           <?php include("./inc/nav_bar.php")  ?>
 <div id="cont">    
<center>
        <p>This page is for a user to upload any file in a pdf format to our servers</p><br/>
</center>  




  <div id="uploadform">
            <form method="POST" action="uploadbooks.php" enctype="multipart/form-data">

   
<div id="addbutton" style="float: right">                
            <label for="cover">


                <div > 
                    <p>
                    <label for="cover"> <img id=blah src="./multimedia/resources/add-image.png" width="52" > <br/> Add Cover Page(s) </label>
                    <input hidden id="cover" type=file name="file" accept="*.jpg">
    <script>
        cover.onchange = evt => {
            const [file] = cover.files
            if (file) {
            blah.src = URL.createObjectURL(file)
            }
        }
    </script>
                    </p>
                </div>


                <div>
                    <p>
                        <label for="filec"> <img id=nm src="./multimedia/resources/add-file.png" width="52px"> <br/> Add Book  </label>
                        <input id="filec" type="file"  hidden >
    <script>
        filec.onchange = evt => {
            const [file] = filec.files
            if (file) {
            nm.src ="./multimedia/resources/add-file-success.png"
            }
        }
    </script>
                        
                    </p>
                </div>
            </label><br/>
            
              
            
</div>
        <p>
        <label for="bookname">Book Name</label>
        <input type="text" name="bookname" id="bookname"> 
        </p>

        <p>
            <label for="author">Author</label>
            <input placeholder="Anonymus" name="Author" type="text" id="author"/>
        </p>

        <p>
            <label for="date" >Date of publishing</label>
            <input id="date" name="date" type="date" value="2020-02-22" ></input>
        </p>
            
<p>
        <label for="genre">Category</label>
        <select name="genre" id="genre" >
            <option value="">Choose an option</option>
            <option value="Educational">Educational</option>
            <option value="Self-help">Self-help</option>
            <option value="Biography">Biography</option>
            <option value="Sci-fi">Sci-fi</option>
            <option  value="World history">World History</option>
            <option  value="Business">Business</option>
            <option  value="Other">Other</option>
        </select>
</p>

<p>
        <label for="'lang">Language</label>

        <select id="lang" name="lang" >

        <option value="English"> English</option>
        <option value="French">Francais</option>
        <option value="Spanish">Espanol</option>
        <option value="Amharic">Amharic  </option>
        <option value="Dutch">Deutsch</option>
        <option  value="Other">Other</option>
        </select>
</p>

<p>
        <label for="Desc" title="Describe what your book is about, the characters, the plot and the setting but be sure not to include spoilers">Description<br/></label>
        <textarea id="Desc" rows="10"  name="description" cols="30">
        </textarea>
</p>

<p>
        <label for=price >Price<br/> </label>
        <b><em>$ </em></b><input id=price type=number name="price" >
</p>

<p>
    
</div>
<div > <center><input name="upload_book" type="submit" value="Submit" id=upld> </center> </div>
</div>  

<?php include("./lib/uploadbooks.php") ?> 

</form>
     
       
</p>
  

    </body>
    
    <?php include("./inc/footer.php") ?>

</html>