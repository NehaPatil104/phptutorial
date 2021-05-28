<?php include('../top.php') ?>

<div class="col-10 content">
          <h2 class="mt-3">PHP Introduction</h2>
          <p>PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.<br>
          PHP is a widely-used, free, and efficient alternative to competitors such as Microsoft's ASP.<br>
          PHP 7 is the latest stable release.</p>
          <h2 >What is PHP?</h2>
          <ul>
            <li>PHP is an acronym for "PHP: Hypertext Preprocessor"</li>
            <li>PHP is a widely-used, open source scripting language</li>
            <li>PHP scripts are executed on the server</li>
            <li>PHP is free to download and use</li>
          </ul>
          <h2 class="mt-1">Basic PHP Syntax</h2>
          <p>A PHP script can be placed anywhere in the document.<br>
            A PHP script starts with <code class="bg-light">&lt;?php</code> and ends with <code class="bg-light">&lt;?></code>
          </p>
          <div class="code-box">
            <div class="main-code">
                &lt;!DOCTYPE html&gt;<br>
                 &lt;html&gt;<br>
                    &lt;body&gt;<br>
                    &lt;h1&gt;My first PHP page&lt;/h1&gt;<br>
                 &lt;?php<br>
                 echo &quot;Hello World!&quot;;<br>?&gt;<br>
                    &lt;/body&gt;<br>
                    &lt;/html&gt;
            </div>    
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Output
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Output</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <h1>My first PHP page</h1>
                    <br><?php echo "Hello World!";?>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>        
          </div>   
           <div style="padding: 25px;"></div>       
        </div>


<?php include('../bottom.php') ?>