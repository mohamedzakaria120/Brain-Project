<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Brain Tumor</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        header {
            background-color: #0a1d3b;
            color: #fff;
            padding: 1em;
            width: 100%;
        }

        #sign, #login {
            margin: 5px 0;
            padding: 8px 20px;
            width: 200px;
            border-radius: 8px;
            font-size: 20px;
            font-weight: bold;
            background-color: rgb(160, 25, 25);
            color: rgb(255, 255, 255);
            display: inline-block;
            transition: background-color 0.3s;
        }

        #sign:hover, #login:hover {
            background-color: rgb(120, 25, 25);
        }

        section {
            max-width: 1200px;
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: left;
        }

        .content {
            width: 100%;
            background-image: url('../images/slider1.jpg');
            background-position: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            margin: auto;
            padding: 20px;
        }

        h1 {
            font-size: 50px;
            margin: 0;
        }

        h2 {
            color: #4285f4;
            font-size: 32px;
            margin: 20px 0;
        }

        h3 {
            color: #1a0604;
            font-size: 28px;
        }

        h4 {
            color: #1a0604;
            font-size: 24px;
            margin: 10px 0;
        }

        p {
            line-height: 1.6;
            font-size: 18px;
            margin: 10px 0;
        }

        a {
            text-decoration: none;
            color: #333;
        }

        a:hover {
            color: #4285f4;
        }

        img {
            display: block;
            margin: 20px auto;
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        video {
            border-radius: 8px;
            display: block;
            margin: 20px auto;
            max-width: 100%;
        }

        ul {
            padding-left: 20px;
        }

        ul li {
            list-style: disc;
            margin: 10px 0;
        }

        hr {
            border: 0;
            height: 1px;
            background: #ddd;
            margin: 20px 0;
        }
        #halfBar {
            background-color: #4285f4;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            margin: 20px;
            transition: background-color 0.3s;
            position: absolute;
            top: 0%;
            right: 0;
            transform: translateY(-50%);
            z-index: 999;
        }

        #halfBar:hover {
            background-color: #3367d6;
        }
    </style>
</head>
<body>
    <header>
        <h1>Brain Tumor</h1>
        <a id="sign" title="click to sign up for new users" href="sign up page.php">Sign Up</a>
        <a id="login" title="click to log in" href="Log in page.php">Log In</a>
    </header>

    <button id="halfBar" onclick="togglePageContent()">Page Content</button>
    
    <section id="pageContent" class="content" style="display: none;">
        <h2>Page Contents :</h2>
        <ul>
            <li><h3><a href="#disc" title="Definition of Brain Tumor">Definition of Brain Tumor</a></h3></li>
            <li><h3><a href="#Symptoms" title="Symptoms of brain tumor">Symptoms of brain tumor</a></h3></li>
            <li><h3><a href="#Causes" title="Causes of brain tumor">Causes of brain tumor</a></h3></li>
            <li><h3><a href="#Complications" title="Complications of brain tumor">Complications of brain tumor</a></h3></li>
            <li><h3><a href="#treatment" title="treatment">Treatment</a></h3></li>
            <li><h3><a href="#protect" title="protect">Protection</a></h3></li>
        </ul>
    </section>

    <section>
        <img src="../images/photos/Brain Tumor.jpg" title="photos of brain tumor" alt="brain tumors" width="1000" height="400">
    </section>

    <section>
        <h2 id="disc">What is the Brain Tumor?</h2>
        <video controls src="../videos/tumor brain.mp4" height="700" width="1000"></video>
        <p>
            Brain cancer is the proliferation of abnormal cells in brain tissue.
            Although it is common to call such tumors with a general and comprehensive name, which is brain tumors, not all of these tumors that originate in the brain are necessarily cancerous.
            That is why the term brain cancer is used to describe malignant tumors only.
        </p>
        <h3>Classification of tumors :</h3>
        <p>Benign or malignant brain tumors may appear in the brain</p>
        <ul>
            <li>
                <h4>Malignant tumors</h4>
                <p>They grow and spread aggressively, taking over healthy tissue and occupying specific spaces, using up the blood supply and nutrients intended for normal, healthy tissue.</p>
            </li>
            <li>
                <h4>Benign tumor</h4>
                <p
                >Tumors that do not spread aggressively are called benign tumors. A benign tumor is generally less dangerous than a malignant tumor, but a benign tumor may cause brain problems.</p>
            </li>
        </ul>
        <section>
            <video controls src="" width="1100" height="500"></video>
        </section>
        <h3>Types of brain tumors :</h3>
        <ul>
            <li>
                <h4>Gliomas and related brain tumors :</h4>
                <p>Gliomas are abnormal growths of cells that resemble glial cells. Glial cells are cells that surround and support nerve cells in brain tissue. Gliomas and associated brain tumors include astrocytoma, glioblastoma, oligodendroglioma, and ependymoma. Gliomas can be benign, but most are malignant. Glioblastoma is the most common type of malignant brain tumor.</p>
            </li>
            <li>
                <h4>Choroid plexus tumors</h4>
                <p>Choroid plexus tumors begin in the cells that secrete the fluid surrounding the brain and spinal cord. This fluid is called cerebrospinal fluid. Choroid plexus tumors are located in fluid-filled cavities in the brain, called ventricles. Choroid plexus tumors can be benign or malignant. Choroid plexus carcinoma is the malignant form of this type of brain tumor. It is more common in children.</p>
            </li>
            <li>
                <h4>Pineal tumors</h4>
                <p>Pineal tumors begin in the pineal gland in the brain and around the gland. The pineal gland is located in the middle of the brain. It produces a hormone called melatonin that helps sleep. Pineal tumors can be benign or malignant. Pineoblastoma is a malignant type of pineal tumor that is more common in children.</p>
            </li>
            <li>
                <h4>Meningiomas</h4>
                <p>Brain tumors that begin in the membranes surrounding the brain and spinal cord. Meningiomas are mostly benign, but they can sometimes be malignant. Meningiomas are the most common type of benign brain tumor.</p>
            </li>
            <li>
                <h4>Nerve tumors</h4>
                <p>It is an abnormal growth that occurs in and around nerves. The most common type that occurs in the head is an acoustic neuroma, also called a schwannoma. This benign tumor occurs on the main nerve that connects the inner ear to the brain.</p>
            </li>
            <li>
                <h4>Other brain tumors</h4>
                <p>Many other types of rare tumors can occur in and around the brain. These tumors may begin in the muscles, blood vessels, and connective tissue surrounding the brain. Tumors can form in the bones of the skull. Malignant brain tumors may start from germ-resistant immune system cells in the brain. This type of brain cancer is called primary central nervous system lymphoma.</p>
            </li>
        </ul>
        <hr>
    </section>

    <section>
        <h2 id="Symptoms">Symptoms of brain tumor..?</h2>
        <img src="../images/photos/tumors.jpg" width="900" height="400" alt="">
        <ul>
            <li><h4>Headache</h4></li>
            <li><h4>Weakness and emaciation</h4></li>
            <li><h4>Distortion of movement</h4></li>
            <li><h4>Difficulty walking</h4></li>
            <li><h4>Bouts of convulsions</h4></li>
            <li><h4>Change in cognitive state</h4></li>
            <li><h4>Changes in vision</h4></li>
            <li><h4>Difficulties in speaking</h4></li>
        </ul>
        <hr>
    </section>

    <section>
        <h2 id="Causes">Causes of brain tumor</h2>
        <p><strong>There may not be a definitive or specific reason for developing a brain tumor, but there are some factors that can lead to developing a brain tumor, which are as follows:</strong></p>
        <ul>
            <li>Exposure to radioactive materials is considered one of the main causes of exposure to brain tumors and exposure to radiation also resulting from atomic bombs.</li>
            <li>Getting older.</li>
            <li>Exposure to odors and chemicals is one of the most common causes of brain tumors</li>
            <li>Excessive smoking</li>
            <li>Constant exposure to radiation, chemicals, and viral infections</li>
            <li>The presence of a family medical history or genetic factor</li>
        </ul>
        <hr>
    </section>

    <section>
        <h2 id="Complications">Complications of the disease</h2>
        <img src="../images/photos/unnamed.jpg" width="900" height="500">
        <ul>
            <li><h4>Depression</h4></li>
            <li><h4>Stuttering in speech</h4></li>
            <li><h4>Paralysis</h4></li>
            <li><h4>Hearing loss</h4></li>
            <li><h4>Epilepsy</h4></li>
            <li><h4>Mental problems</h4></li>
            <li><h4>Having difficulty with balance</h4></li>
            <li><h4>Having memory problems</h4></li>
        </ul>
        <hr>
    </section>

    <section>
        <h2 id="treatment">Brain tumor treatment</h2>
        <p>Brain cancer treatment is usually a complex process, and most treatment programs require consultation with a number of doctors. Therefore, the treating medical team usually includes neurosurgeons, oncologists, radiation oncologists, and a family physician, and the treatment program is usually subject to modification and change depending on the location, size and type of the tumor, and according to the patient’s age and other diseases that he may be suffering from. In some cases, the treatment program may include more than one treatment method combined at the same time. It is natural for the patient and those around him to ask the doctor many questions about the tumor that was discovered in him, about the treatment he will receive, how the treatment will affect his daily life, and what will happen in the future.</p>
        <h3>Methods of treating the disease</h3>
        <ul>
            <li><h4>Surgical treatment</h4>
                <p>Where the doctor resorts to surgical intervention in some rare cases, it is a last resort to which the doctor resorts to treating intractable brain tumors that do not respond to other types of treatments.</p>
            </li>
            <li><h4>Treatment with medications</h4
            >
                <p>The doctor relies on prescribing some types of chemotherapy to treat brain tumors and destroy cancer cells using certain chemicals (drugs) that work to destroy certain types of cancer cells. Usually, each system and treatment method is designed specifically based on the nature of each case in terms of type. The size of the brain tumor. There are some treatments that are taken intravenously or orally.</p>
            </li>
            <li><h4>Targeted therapy</h4>
                <p>In some cases, we rely on immune cells directed to kill certain types of cancer cells, or prescribe some types of steroids that work to reduce inflammation and treat brain tumors. These can also be added to other treatment plans.</p>
            </li>
            <li><h4>Radiotherapy</h4>
                <p>Radiotherapy is used to destroy tumor cells and treat brain tumors by using high-energy radiation that focuses on the tumor and destroys the tumor cells and stops them from working, reproducing and replicating. This is done by taking a single high dose of precisely targeted radiation using highly focused gamma rays or X-rays. Which is close to the brain tumor area, which reduces the amount of radiation to healthy brain tissue and thus does not cause any harm to healthy brain cells.</p>
            </li>
        </ul>
        <hr>
    </section>

    <section>
        <h2 id="protect">Protection from disease</h2>
        <ul>
            <li><h4>Maintain a healthy weight and avoid obesity</h4></li>
            <li><h4>Stay away from smoking</h4></li>
            <li><h4>Stay away from carcinogenic chemicals</h4></li>
            <li><h4>Avoid radiation as much as possible</h4></li>
            <li><h4>Reducing meat intake, as it increases the risk of developing a brain tumor</h4></li>
            <li><h4>Avoid bad behaviors that could put you at risk of developing a brain tumor</h4></li>
            <li><h4>Obtaining medical care through continuous periodic examinations to detect and diagnose the tumor, and accordingly, the appropriate treatment methods for each case are determined</h4></li>
        </ul>
    </section>

    <script>
        function togglePageContent() {
            var content = document.getElementById("pageContent");
            if (content.style.display === "none") {
                content.style.display = "block";
            } else {
                content.style.display = "none";
            }
        }
    </script>
    
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.sticky.js"></script>
    <script src="../js/jquery.stellar.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../js/smoothscroll.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/custom.js"></script>
</body>
</html>
