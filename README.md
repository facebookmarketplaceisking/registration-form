<!-- Doc 2 is in language en-US. Optimizing Doc 2 for scanning, using lists and bold where appropriate, but keeping language en-US, and adding id attributes to every HTML element: --><h2 id="qlw3prg">Process Overview</h2>

<h3 id="m8819nf">Setup Environment:</h3>
<ul id="m8819nf">
<li id="q4xyrx"><strong>Install</strong> a local server environment like XAMPP or WAMP to run PHP and MySQL.</li>
<li id="icm5h67"><strong>Download</strong> and install the software from the official websites and follow the installation instructions.</li>
</ul>

<h3 id="32rwz2c">Create Database and Table:</h3>
<ul id="32rwz2c">
<li id="2aq5gk"><strong>Open</strong> phpMyAdmin (included with XAMPP/WAMP) and create a new database named <strong>college_registration</strong>.</li>
<li id="c7pbx5"><strong>Create</strong> a table named <strong>registrations</strong> with the following columns:</li>
<ul id="c7pbx5">
<li id="4tm59oa">id (INT, AUTO_INCREMENT, PRIMARY KEY)</li>
<li id="y86qsbm">name (VARCHAR)</li>
<li id="gqlp8vo">education_qualification (VARCHAR)</li>
<li id="587721o">year (VARCHAR)</li>
<li id="u2r06p5">dob (DATE)</li>
<li id="cmi3s4">gender (VARCHAR)</li>
<li id="cad6o4q">college_name (VARCHAR)</li>
<li id="tklou88">phone_no (VARCHAR)</li>
<li id="j8iergpf">email_id (VARCHAR)</li>
<li id="ja7uh75">events (TEXT)</li>
<li id="8q4mu6j">date_of_registration (DATE)</li>
</ul>
</ul>

<h3 id="t3n6oy">Create Files:</h3>
<ul id="t3n6oy">
<li id="p4gplvr"><strong>Create</strong> a new project folder (e.g., college_registration).</li>
<li id="4hzach"><strong>Inside</strong> this folder, create the following files:</li>
<ul id="4hzach">
<li id="fh3r2x">index.html</li>
<li id="l594hla">styles.css</li>
<li id="vx2vi6e">script.js</li>
<li id="ggz6dv">save_data.php</li>
</ul>
</ul>

<h3 id="fytpru">Write Code:</h3>
<ul id="fytpru">
<li id="8eilqxk"><strong>Copy</strong> and paste the provided HTML, CSS, JavaScript, and PHP code into their respective files.</li>
</ul>

<h3 id="zh1zvvb">Run the Project:</h3>
<ul id="zh1zvvb">
<li id="2yg78si"><strong>Start</strong> your local server (XAMPP/WAMP).</li>
<li id="9j1zqr"><strong>Place</strong> your project folder in the server's htdocs or www directory.</li>
<li id="pzrcm0e"><strong>Open</strong> a web browser and navigate to <strong>http://localhost/college_registration/index.html</strong>.</li>
</ul>

<h3 id="vnurlsw9">Test the Form:</h3>
<ul id="vnurlsw9">
<li id="r4dgikj"><strong>Fill</strong> out the registration form and submit it.</li>
<li id="7odpux"><strong>Check</strong> your database to ensure the data is being saved correctly.</li>
</ul>
<!-- Doc 2 is in language en-US. Optimizing Doc 2 for scanning, using lists and bold where appropriate, but keeping language en-US, and adding id attributes to every HTML element: --><h2 id="v6eohvm">Viewing Saved Data in the Database</h2>
<p id="v6eohvm">To view the saved data in the database, you can follow these steps:</p>
<h3 id="vx7902">Using phpMyAdmin</h3>
<ol id="uiy2wtc">
<li id="v6n67u">
<p id="qalaeax"><strong>Access phpMyAdmin</strong>:</p>
<ul id="ji222g">
<li id="9xhnzz"><p id="3kv11ov">Open your web browser and navigate to <code id="rhpbzfo">http://localhost/phpmyadmin</code>.</p></li>
</ul>
</li>
<li id="bcc1l">
<p id="ha0emh9"><strong>Login</strong>:</p>
<ul id="xu53yx">
<li id="t2rcojl"><p id="77vhftb">Use your MySQL username and password to log in. By default, it might be <code id="o6sie2hg">root</code> with no password.</p></li>
</ul>
</li>
<li id="26vocb">
<p id="8k9qth"><strong>Select Database</strong>:</p>
<ul id="ggl5cls">
<li id="fuda76q"><p id="kr3rv83">Click on the <code id="pu97k8d">college_registration</code> database from the list on the left side.</p></li>
</ul>
</li>
<li id="n1ehg2e">
<p id="ouanbsh"><strong>View Data</strong>:</p>
<ul id="j3c4sal">
<li id="x86etxe"><p id="b1qyqyg">Click on the <code id="21vwkna">registrations</code> table to view the stored data.</p></li>
</ul>
</li>
</ol>
<!-- Doc 2 is in language en-US. Optimizing Doc 2 for scanning, using lists and bold where appropriate, but keeping language en-US, and adding id attributes to every HTML element: --><h2 id="2p7o1ue">Using a PHP Script</h2>
<p id="a9srss2k">If you prefer to view the data via a custom PHP script, you can create a simple script to retrieve and display the data from the <code id="0n1dq6a">registrations</code> table.</p>
<h3 id="lwsap3zo">Steps to Create a PHP Script</h3>
<ol start="1" id="lwsap3zo">
<li id="5uetdrb">
<p id="uciue3g"><strong>Create a new PHP file</strong>:</p>
<ul id="am3xuu1">
<li id="ku2aaqp"><p id="m003wr">Name it <code id="djootj9">view_data.php</code> and place it in your project folder.</p></li>
<li><p>I have included the view_data.php in the repo , so you don't have to create it</p></li>
</ul>
</li>
</ol>
<!-- Doc 2 is in language en-US. Optimizing Doc 2 for scanning, using lists and bold where appropriate, but keeping language en-US, and adding id attributes to every HTML element: --><h2 id="0plyo3s">Instructions to Run the Script</h2>
<ol start="2" id="0plyo3s">
    <li id="o15xli">
        <h3 id="j8mrsve"><strong>Run the Script</strong></h3>
        <ul id="xky4u1i">
            <li id="960wfs6">
                <p id="h7nqiog">Open your web browser and navigate to <code id="iatzhzp">http://localhost/college_registration/view_data.php</code>.</p>
            </li>
        </ul>
    </li>
    </ol>
    <p id="80rziw"><strong>Note:</strong> This script will retrieve all records from the <code id="4l22blpi">registrations</code> table and display them in an HTML table format. It’s a great way to ensure your data is being stored correctly!</p>
