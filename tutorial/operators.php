<?php include('../top.php') ?>
<div class="col-10" id="top">
          <h2 class="mt-3">PHP Operators</h2>
          <h3 class="mt-5">PHP Arithmetic Operators</h3>
          <p>The PHP arithmetic operators are used with numeric values to perform common arithmetical operations, such as addition, subtraction, multiplication etc.</p>
          <div class="code-box">
            <div class="main-code" style="line-height: 1.8;">
                &lt;!DOCTYPE html&gt;<br>
                 &lt;html&gt;<br>
                    &lt;body&gt;<br>
                    &lt;h1&gt;Arithmetic Operators&lt;/h1&gt;<br>
                 &lt;?php<br>
                 
                 var1&#61;45;<br>
                 var2&#61;40;<br>
                 ?&gt;<br>
                 &lt;h6&gt;Addtion&lt;/h6&gt;<br>
                  &lt;?php echo &#36;var1 &#43; &#36;var2; ?&gt;<br>
                 &lt;h6&gt;Substraction&lt;/h6&gt;<br>
                  &lt;?php echo &#36;var1 &#45; &#36;var2; ?&gt;<br>
                 &lt;h6&gt;Multiplication&lt;/h6&gt;<br>
                  &lt;?php echo &#36;var1 &#42; &#36;var2; ?&gt;<br>
                 &lt;h6&gt;Division&lt;/h6&gt;<br>
                  &lt;?php echo &#36;var1 &#47; &#36;var2; ?&gt;<br>
                 &lt;h6&gt;Modulo&lt;/h6&gt;<br>
                  &lt;?php echo &#36;var1 &#37; &#36;var2; ?&gt;<br>
                 ?&gt;<br>

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
                    <h3>Assignment Operators</h3>
                    <h6>Addition</h6>
                    <?php 
                    $var1 = 45;
                    $var2 = 40;
                    echo $var1 + $var2; ?>
                    <h6>Substraction</h6>
                    <?php echo $var1 - $var2; ?>
                     <h6>Multiplication</h6>
                    <?php echo $var1 * $var2; ?>
                     <h6>Division</h6>
                    <?php echo $var1 / $var2; ?>
                     <h6>Modulo</h6>
                    <?php echo $var1 % $var2; ?>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>        
          </div>        

          <h3 class="mt-5">PHP Assignment Operators</h3>
          <p>The PHP assignment operators are used with numeric values to write a value to a variable. The basic assignment operator in PHP is "=". It means that the left operand gets set to the value of the assignment expression on the right.</p>
          <div class="code-box">
            <div class="main-code" style="line-height: 1.8;">
                &lt;!DOCTYPE html&gt;<br>
                 &lt;html&gt;<br>
                    &lt;body&gt;<br>
                    &lt;h1&gt;Assignment Operators&lt;/h1&gt;<br>
                    &lt;h6&gt;  The left operand gets set to the value of the expression on the right (&#61;)&lt;/h6&gt;<br>
                    &lt;?php &#36;a&#61;45; echo &#36;a; ?&gt;<br>
                    &lt;h6&gt;  Addition  (&#43; &#61;) &lt;/h6&gt;<br>
                    &lt;?php &#36;a&#43;  &#61;100;  echo &#36;a; ?&gt;<br>
                    &lt;h6&gt;    Subtraction (&#45; &#61;)&lt;/h6&gt;<br>
                    &lt;?php &#36;a&#45;  &#61;50;  echo &#36;a; ?&gt;<br>

                    &lt;h6&gt;  Multiplication (&#42; &#61;)&lt;/h6&gt;<br>
                    &lt;?php &#36;a&#42;  &#61;2;  echo &#36;a; ?&gt;<br>

                    &lt;h6&gt;  Division (&#47; &#61;)&lt;/h6&gt;<br>
                    &lt;?php &#36;a&#47;  &#61;5;  echo &#36;a; ?&gt;<br>

                    &lt;h6&gt;  Modulus (&#37; &#61;)&lt;/h6&gt;<br>
                    &lt;?php &#36;a&#37;  &#61;2;  echo &#36;a; ?&gt;<br>

                    &lt;/body&gt;<br>
                    &lt;/html&gt;  
            </div>    
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal2">
              Output
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Output</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <h3>Assignment Operators</h3>
                    <h6>  The left operand gets set to the value of the expression on the right (=)</h6>
                    <?php $a=45;  echo $a; ?>
                    <h6>  Addition (+=)</h6>
                    <?php $a+=100; echo $a; ?>
                    <h6>Subtraction (-=)</h6>
                    <?php $a-=50; echo $a; ?>
                    <h6>Multiplication (*=)</h6>
                    <?php $a*=2; echo $a; ?>
                    <h6>Division (/=)</h6>
                    <?php $a/=5; echo $a; ?>
                    <h6>Modulus (%=)</h6>
                    <?php $a%=2; echo $a; ?>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>        
          </div>  

          <h3 class="mt-5">PHP Comparision Operators</h3>
          <p>The PHP comparison operators are used to compare two values (number or string).</p>
          <div class="code-box">
            <div class="main-code" style="line-height: 1.8;">
                &lt;!DOCTYPE html&gt;<br>
                 &lt;html&gt;<br>
                    &lt;body&gt;<br>
                    &lt;h1&gt;Comparision Operators&lt;/h1&gt;<br>
                    &lt;?php &#36;x&#61;40; &#36;y&#61;"40"; ?&gt;<br>

                    &lt;h6&gt; (&#61;&#61;) Equal &lt;/h6&gt;<br>
                    &lt;?php echo var_dump( &#36;x &#61; &#61;  &#36;y); ?&gt;<br>
                    &lt;h6&gt; (&#61;&#61;&#61;) Identical &lt;/h6&gt;<br>
                    &lt;?php echo var_dump( &#36;x &#61;&#61;&#61;  &#36;y); ?&gt;<br>
                    &lt;h6&gt; ( &#33;&#61;) Not Equal &lt;/h6&gt;<br>
                    &lt;?php echo var_dump( &#36;x &#33;&#61; &#36;y); ?&gt;<br>
                    &lt;h6&gt; (&lt; &gt;) Not Equal &lt;/h6&gt;<br>
                    &lt;?php echo var_dump( &#36;x &lt; &gt;  &#36;y); ?&gt;<br>
                    &lt;h6&gt; (&#33;&#61;&#61;) Not Identical &lt;/h6&gt;<br>
                    &lt;?php echo var_dump( &#36;x &#33;&#61;&#61;  &#36;y); ?&gt;<br>
                    &lt;?php &#36;x&#61;108; &#36;y&#61;67; ?&gt;<br>
                    &lt;h6&gt; (&gt;) Greater than &lt;/h6&gt;<br>
                    &lt;?php echo var_dump( &#36;x &gt; y); ?&gt;<br>
                    &lt;h6&gt; (&lt;) Less than &lt;/h6&gt;<br>
                    &lt;?php echo var_dump( &#36;x &lt; y); ?&gt;<br>
                    &lt;h6&gt; (&gt; &#61;) Greater than  or equal to &lt;/h6&gt;<br>
                    &lt;?php echo var_dump( &#36;x &gt; &#61; y); ?&gt;<br>
                    &lt;h6&gt; (&lt; &#61;) Less than or equal to &lt;/h6&gt;<br>
                    &lt;?php echo var_dump( &#36;x &lt;&#61; y); ?&gt;<br>
                    &lt;/body&gt;<br>
                    &lt;/html&gt;  
            </div>    
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal3">
              Output
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Output</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <h3>Comparision Operators</h3>
                    <?php $x= 40; $y= "40"; ?>
                    <h6> (==) Equal </h6>
                    <?php echo var_dump($x == $y); ?>
                    <h6> (===) Identical </h6>
                    <?php echo var_dump($x === $y); ?>
                    <h6> (!=) Not Equal </h6>
                    <?php echo var_dump($x != $y); ?>
                    <h6> (< >) Not Equal </h6>
                    <?php echo var_dump($x <> $y); ?>
                    <h6> (!==) Not Identical </h6>
                    <?php echo var_dump($x !== $y); ?>
                    <?php $x= 108; $y= 67; ?>
                    <h6> (>) Greater than </h6>
                    <?php echo var_dump($x > $y); ?>
                    <h6> (<) Less than </h6>
                    <?php echo var_dump($x < $y); ?>
                    <h6> (>=) Greater than or equal to </h6>
                    <?php echo var_dump($x >= $y); ?>
                    <h6> (<=) Less than or equal to </h6>
                    <?php echo var_dump($x <= $y); ?>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>        
          </div>

          <h3 class="mt-5">PHP Increment / Decrement Operators</h3>
          <p>The PHP increment operators are used to increment a variable's value.<br>The PHP decrement operators are used to decrement a variable's value.</p>
          <div class="code-box">
            <div class="main-code" style="line-height: 1.8;">
                &lt;!DOCTYPE html&gt;<br>
                 &lt;html&gt;<br>
                    &lt;body&gt;<br>
                    &lt;h1&gt;Increment / Decrement Operators&lt;/h1&gt;<br>
                    &lt;?php &#36;x&#61;5; ?&gt;<br>

                    &lt;h6&gt; (&#43; &#43; &#36;x)   Pre-increment &lt;/h6&gt;<br>
                    &lt;?php echo &#43; &#43;&#36;x; ?&gt;<br>
                    &lt;h6&gt; (&#36;x &#43; &#43;)   Post-increment &lt;/h6&gt;<br>
                    &lt;?php echo &#36;x&#43; &#43;; ?&gt;<br>
                    &lt;h6&gt; (&#45; &#45; &#36;x)   Pre-decrement &lt;/h6&gt;<br>
                    &lt;?php echo &#45; &#45;&#36;x; ?&gt;<br>
                    &lt;h6&gt; (&#36;x &#45; &#45;)   Post-decrement &lt;/h6&gt;<br>
                    &lt;?php echo &#36;x&#45; &#45;; ?&gt;<br>
                    &lt;/body&gt;<br>
                    &lt;/html&gt;  
            </div>    
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal4">
              Output
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Output</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <h3>Increment / Decrement Operators</h3>
                    <?php $x= 5; ?>
                    <h6> (++$x) Pre-increment </h6>
                    <?php echo ++$x; ?>
                    <h6> ($x++) Post-increment </h6>
                    <?php echo $x++; ?>
                    <h6> (--$x) Pre-decrement </h6>
                    <?php echo --$x; ?>
                    <h6> ($x--) Post-decrement </h6>
                    <?php echo $x--; ?>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>        
          </div>

          <h3 class="mt-5">PHP Logical Operators</h3>
          <p>The PHP logical operators are used to combine conditional statements.</p>
          <div class="code-box">
            <div class="main-code" style="line-height: 1.8;">
                &lt;!DOCTYPE html&gt;<br>
                 &lt;html&gt;<br>
                    &lt;body&gt;<br>
                    &lt;h1&gt;PHP Logical Operators&lt;/h1&gt;<br>

                    &lt;h6&gt; (and) AND &lt;/h6&gt;<br>
                   
                    &lt;?php<br>&nbsp;&nbsp;&nbsp;&nbsp;   &#36;username&#61;"neha104"; &#36;password&#61;"Neha";<br>
                    &nbsp;&nbsp;&nbsp;&nbsp; if (&#36;username == "neha104" <b>and</b> &#36;password == "Neha") {<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "Welcome to CoWIN!";<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}<br> ?&gt;<br>
                    
                    &lt;h6&gt; (or) OR &lt;/h6&gt;<br>
                   
                    &lt;?php<br>&nbsp;&nbsp;&nbsp;&nbsp;   &#36;x&#61;19;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp; if (&#36;x == 18 <b>or</b> &#36; x > 18) {<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "Eligible for vaccination. You can register from 28th April!";<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}<br> ?&gt;<br>

                    &lt;h6&gt; (xor) XOR &lt;/h6&gt;<br>
                   
                    &lt;?php<br>&nbsp;&nbsp;&nbsp;&nbsp;   &#36;x&#61;18;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp; if (&#36;x == 18 <b>xor</b> &#36; x > 18) {<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "Eligible for vaccination. You can register from 28th April!";<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}<br> ?&gt;<br>

                     &lt;h6&gt; (!) NOT &lt;/h6&gt;<br>
                   
                    &lt;?php<br>&nbsp;&nbsp;&nbsp;&nbsp;   &#36;disease&#61;false;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp; if (!&#36;disease) {<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "You don't have any disease. Eligible for vaccination. You can register from 28th April!";<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}<br> ?&gt;<br>
                    &lt;/body&gt;<br>
                    &lt;/html&gt;  
            </div>    
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal5">
              Output
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Output</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <h3>PHP Logical Operators</h3>
                    <h6> (and) AND </h6>
                    <?php 
                        $username="neha104"; $password="Neha";
                        if($username=="neha104" and $password=="Neha"){
                           echo "Welcome to CoWIN!";
                        }
                    ?>
                    <h6> (or) OR </h6>
                    <?php 
                        $x=19;
                        if($x ==18 or $x > 18){
                           echo "Eligible for vaccination. You can register from 28th April!";
                        }
                    ?>
                    <h6> (xor) XOR </h6>
                    <?php 
                        $x=18;
                        if($x ==18 xor $x > 18){
                           echo "Eligible for vaccination. You can register from 28th April!";
                        }
                    ?>
                     <h6> (!) NOT </h6>
                    <?php 
                        $disease=false;
                        if(!$disease){
                           echo "You don't have any disease.Eligible for vaccination. You can register from 28th April!";
                        }
                    ?>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <h3 class="mt-5">PHP String Operators</h3>
          <p>PHP has two operators that are specially designed for strings.</p>
          <div class="code-box">
            <div class="main-code" style="line-height: 1.8;">
                &lt;!DOCTYPE html&gt;<br>
                 &lt;html&gt;<br>
                    &lt;body&gt;<br>
                    &lt;h1&gt;PHP String Operators&lt;/h1&gt;<br>

                    &lt;h6&gt; (.)  Concatenation &lt;/h6&gt;<br>
                                       
                    &lt;?php <br> &#36;str1="Namaste"; &#36;str2="World"; <br>
                    echo &#36;str1 <b>.</b> &#36;str2;<br> ?&gt;<br>
                    &lt;h6&gt; (.=)  Concatenation assignment &lt;/h6&gt;<br>
                                       
                    &lt;?php  <br>
                    &#36;str1 <b>.=</b> &#36;str2;<br>
                    echo &#36;str1;<br> ?&gt;<br>
                    &lt;/body&gt;<br>
                    &lt;/html&gt;  
            </div>    
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal6">
              Output
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Output</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <h3>PHP String Operators</h3>
                    <h6> (.)  Concatenation </h6>
                    <?php 
                        $str1="Namaste"; $str2="World";
                        echo $str1.$str2;
                    ?>
                    <h6> (.=)  Concatenation Assignment</h6>
                    <?php 
                        $str1.=$str2;
                        echo $str1;
                    ?>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <h3 class="mt-5">Conditional or Ternary Operators</h3>
          <p>PHP has two operators that are specially designed for strings.</p>
          <div class="code-box">
            <div class="main-code" style="line-height: 1.8;">
                &lt;!DOCTYPE html&gt;<br>
                 &lt;html&gt;<br>
                    &lt;body&gt;<br>
                    &lt;h1&gt;Conditional or Ternary Operators&lt;/h1&gt;<br>
                                       
                    &lt;?php <br> &#36;x=-7; <br>
                    echo  (&#36;x > 0) ? 'The number is positive' : 'The number is negative';<br> ?&gt;<br>
                   
                                       
            </div>    
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal7">
              Output
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Output</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <h3>(?:) Conditional or Ternary Operators</h3>
                    <?php 
                        $x=-7;
                        echo ($x > 0) ? 'The number is positive' : 'The number is negative';
                    ?>
                   
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

<?php include('../bottom.php') ?>