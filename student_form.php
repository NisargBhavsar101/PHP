        <html>
    <head>
        <style>
            .center{
                margin: auto;
                width: 40%;
                padding: 25px;
                margin-top: 30px;
            }
            
            div{
                width: 100%;
                border-radius: 5px;
                background:burlywood;
               margin-left:30% ;
                padding: 20px;
            }
            
            input[type=number],input[type=area],input[type=email],input[type=text]{
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
            
            input[type=date],select{
                width: 50%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
            
            input[type=submit]{
                width: 100%;
                color: white;
                padding: 14px 12px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                background-color: #4CAF50;
                cursor: pointer;
            }
            
            input[type=submit]:hover {
                background-color: #45a049;
            }
            
            h1{
                color: 3333px;;
                padding-left: 29%;
            }
        </style>
        <title>Registration Form</title>
    </head>
    <body bgcolor="#22222">
        
   

        <script type="text/javascript">
            function submitForm() {
                return confirm('Do you really want to submit the form?');
            }
        </script>
        <h2 style="text-align: center; background-color:aqua">-----Summer Inernship-2k21-----Fill Registration Form as-soon-as Possible-----</h2>
        <div class="center">
            <h1>Registration Form</h1>
                      <form action="display.php" method="post" onsubmit="return submitForm(this);" >
                
                <label for="name">Name<font color=red>*</font></label>
                <input id="name" name="name" type="text" placeholder="Enter the Name" required="required" />
                
                <label for="gen">Gender<font color=red>*</font></label><br />
                <select id="gen" name="gen">
                    <option value="Male" selected="selected">Male</option>
                    <option value="Female">Female</option>
                </select><br />
                
                <label for="dob">Date of Birth<font color=red>*</font></label>
                <br /><input id="dob" name="dob" type="date" placeholder="Enter the Date of Birth" required="required" /><br />
                
                <label for="email">Email<font color=red>*</font></label>
                <input id="email" name="email" type="email" placeholder="Enter the E-Mail" required="required" />
                
                
                <label for="m_no">Mobile No.<font color=red>*</font></label>
                <input id="m_no" name="m_no" type="number" minlength="10" maxlength="10" placeholder="Enter the Mobile No." required="required" />
                
                <label for="c_name">College Name<font color=red>*</font></label>
                <input id="c_name" name="c_name" type="text" placeholder="Enter the College Name" required="required" />
                 <label for="sub">Subject<font color=red>*</font></label><br />
                <select id="sub" name="sub">
                    <option value="PHP" selected="selected">PHP</option>
                    <option value="Python with dJango">Python with dJango</option>
                    <option value="Node js">Node JS</option>
                    <option value="Java">Java</option>
                </select><br />
                <label for="off_on">Offline / Online <font color=red>*</font></label><br />
                <select id="off_on" name="type">
                    <option value="Online" selected="selected">Online</option>
                    <option value="Offline">Offline</option>
                </select><br />
                <label for="city">City<font color=red>*</font></label><br />
                <select id="city" name="city">
                    <option value="Ahmdabad" selected="selected">Ahmdabad</option>
                    <option value="surat">surat</option>
                    <option value="Rajkot">Rajkot</option>
                    <option value="vadodara">vadodara</option>
                </select><br />
                <br/>
                <label for="Area">Area</label>
                <input id="pin" name="Area" type="area" />
                <br/>
                <br/>
                <label for="pin">Pincode</label>
                <input id="pin" name="pin" type="number" maxlength="6" minlength="6" placeholder="Enter the Pin Code" />
                <input type="submit" value="SUBMIT"/>
            </form>
                <button  style=" width: 100%;color:Black;padding: 14px 12px;margin: 8px ;border: none;border-radius: 4px;cursor: pointer;" >
               <a href="display.php">
                Display Record
                </a>
                </button>  
            </div>
                
    </body>
</html>
