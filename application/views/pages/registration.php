<!DOCTYPE html>
<html>

<head>
    <title>Registration form</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="javascript/register.js" rel="stylesheet"></script>
    <script src="javascript/bootstrap.js" rel="stylesheet"></script>
    <script src="jquery/popper.js" rel="stylesheet"></script>
    <script src="jquery/jquery-3.2.1.js" rel="stylesheet"></script>
</head>

<body>
    <div class="container">
        <h2>Registration Form</h2>
        <form method="post" id="register_form" name="register_form">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active_tab1" id="list_personal_details" style="border:1px solid #ccc">Personal Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link inactive_tab1" id="list_contact_details" style="border:1px solid #ccc">Medical Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link inactive_tab1" style="border:1px solid #ccc" id="list_login_details"> Finish</a>
                </li>
            </ul>
            <div class="tab-content" style="margin-top:16px;">
                <div class="tab-pane active" id="login_details">
                    <div class="panel panel-default">
                        <div class="panel-heading">Login Details</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Name: </label>
                                <input type="text" name="name" class="form-control" placeholder="enter name" />
                            </div>
                    
                            <div class="form-group">
                                <label>Phone Number *</label>
                                <input type="tel" name="phone" class="form-control" placeholder="enter number" />
                            </div>
                            <div class="form-group">
                                <label>Date of Birth </label>
                                <input type="date" name="dob" class="form-control" placeholder="birth" />
                            </div>
                            <div class="form-group">
                                <label>Age </label>
                                <input type="number" name="age" class="form-control" placeholder="age" />
                            </div>
                            <div class="form-group">
                                <label>Height </label>
                                <input type="number" name="height" class="form-control" placeholder="height" />
                            </div>
                            <div class="form-group">
                                <label>weight </label>
                                <input type="number" name="weight" class="form-control" placeholder="weight" />
                            </div>
                            <div class="form-group">
                                <label>In Case of Emergency Contact </label>
                                <input type="number" name="contact" class="form-control" placeholder="enter number" />
                            </div>
                            <div class="form-group">
                                <label>Relationship </label>
                                <input type="text" name="relationship" class="form-control" placeholder="enter " />
                            </div>
                            <div class="form-group">
                                <label>Address: </label>
                                <input type="text" name="address" id="address" class="form-control" placeholder="enter address " / />
                            </div>
                            <div class="form-group">
                                <label>Email Id *</label>
                                <input type="text" name="email" id="email" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Enter Password *</label>
                                <input type="password" name="password" id="password" class="form-control" />
                            </div>
                            <br />
                            <div>
                                <button type="button" name="btn_login_details" id="btn_login_details" class="btn btn-info btn-lg">Next</button>
                            </div>
                            <br />
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="personal_details">
                    <div class="panel panel-default">
                        <div class="panel-heading">Fill Personal Details</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Are you currently under a doctor’s care<label>
                                <label class="radio-inline">
                                    <input type="radio" name="option1" value="male" checked>Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="option1" value="female"> No
                                </label>
                            </div>
                            <div class="form-group">
                                <label>If yes, explain *</label>
                                <input type="text" name="relationship" class="form-control" placeholder="enter " />
                            </div>
                            <div class="form-group">
                                <label>When was the last time you had a physical examination?  *</label>
                                <input type="text" name="relationship" class="form-control" placeholder="enter " />
                            </div>
                            <div class="form-group">
                                <label>Have you ever had an exercise stress test *<label>
                                <label class="radio-inline">
                                    <input type="radio" name="option2" value="male" checked>Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="option2" value="female"> No
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="option2" value="female"> Don’t Know
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Have you ever had an exercise stress test *<label>
                                <label class="radio-inline">
                                    <input type="radio" name="option3" value="male" checked>Normal
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="option3" value="female"> Abnormal
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Have you ever had an exercise stress test *<label>
                                <label class="radio-inline">
                                    <input type="radio" name="option4" value="male" checked>Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="option4" value="female"> No
                                </label>
                            </div>
                            <div class="form-group">
                                <label>If yes, please list medications and reasons for taking *</label>
                                <input type="text" name="relationship" class="form-control" placeholder="enter " />
                            </div>
                            <div class="form-group">
                                <label>Have you been recently hospitalized? *<label>
                                <label class="radio-inline">
                                    <input type="radio" name="option5" value="male" checked>Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="option5" value="female"> No
                                </label>
                            </div>
                            <div class="form-group">
                                <label>If yes, explain *</label>
                                <input type="text" name="relationship" class="form-control" placeholder="enter " />
                            </div>
                            <div class="form-group">
                                <label>Do you smoke? *<label>
                                <label class="radio-inline">
                                    <input type="radio" name="option6" value="male" checked>Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="option6" value="female"> No
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Are you pregnant? *<label>
                                <label class="radio-inline">
                                    <input type="radio" name="option7" value="male" checked>Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="option7" value="female"> No
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Do you drink alcohol more than three times/week? *<label>
                                <label class="radio-inline">
                                    <input type="radio" name="option" value="male" checked>Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="option" value="female"> No
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Is your stress level high? *<label>
                                <label class="radio-inline">
                                    <input type="radio" name="option" value="male" checked>Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="option" value="female"> No
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Are you moderately active on most days of the week? *<label>
                                <label class="radio-inline">
                                    <input type="radio" name="option8" value="male" checked>Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="option8" value="female"> No
                                </label>
                            </div>
                            <h4>Do you have: </h4>
                            <div class="form-group">
                                <label>High blood pressure? *<label>
                                <label class="radio-inline">
                                    <input type="radio" name="option9" value="male" checked>Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="option9" value="female"> No
                                </label>
                            </div>
                            <div class="form-group">
                                <label>High cholesterol? *<label>
                                <label class="radio-inline">
                                    <input type="radio" name="option10" value="male" checked>Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="option10" value="female"> No
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Diabetes? *<label>
                                <label class="radio-inline">
                                    <input type="radio" name="option11" value="male" checked>Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="option11" value="female"> No
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Have parents or siblings who, prior to age 55 had *<label>
                                <label class="radio-inline">
                                    <input type="radio" name="option12" value="male" checked>Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="option12" value="female"> No
                                </label>
                            </div>
                            <div class="form-group">
                                <label>A heart attack? *<label>
                                <label class="radio-inline">
                                    <input type="radio" name="option13" value="male" checked>Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="option13" value="female"> No
                                </label>
                            </div>
                            <div class="form-group">
                                <label>A stroke? *<label>
                                <label class="radio-inline">
                                    <input type="radio" name="option14" value="male" checked>Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="option14" value="female"> No
                                </label>
                            </div>
                            <div class="form-group">
                                <label>High blood pressure? *<label>
                                <label class="radio-inline">
                                    <input type="radio" name="option15" value="male" checked>Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="option15" value="female"> No
                                </label>
                            </div>
                            <div class="form-group">
                                <label>High cholesterol?*<label>
                                <label class="radio-inline">
                                    <input type="radio" name="option16" value="male" checked>Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="option16" value="female"> No
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Known heart disease? *<label>
                                <label class="radio-inline">
                                    <input type="radio" name="option17" value="male" checked>Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="option17" value="female"> No
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Rheumatic heart disease? *<label>
                                <label class="radio-inline">
                                    <input type="radio" name="option18" value="male" checked>Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="option18" value="female"> No
                                </label>
                            </div>
                            <div class="form-group">
                                <label>A heart murmur? *<label>
                                <label class="radio-inline">
                                    <input type="radio" name="option19" value="male" checked>Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="option19" value="female"> No
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Chest pain with exertion? *<label>
                                <label class="radio-inline">
                                    <input type="radio" name="option20" value="male" checked>Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="option20" value="female"> No
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Irregular heart beat or palpitations? *<label>
                                <label class="radio-inline">
                                    <input type="radio" name="option21" value="male" checked>Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="option21" value="female"> No
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Lightheadedness or do you faint? *<label>
                                <label class="radio-inline">
                                    <input type="radio" name="option22" value="male" checked>Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="option22" value="female"> No
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Unusual shortness of breath? *<label>
                                <label class="radio-inline">
                                    <input type="radio" name="option23" value="male" checked>Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="option23" value="female"> No
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Cramping pains in legs or feet? *<label>
                                <label class="radio-inline">
                                    <input type="radio" name="option24" value="male" checked>Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="option24" value="female"> No
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Emphysema? *<label>
                                <label class="radio-inline">
                                    <input type="radio" name="option25" value="male" checked>Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="option25" value="female"> No
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Other metabolic disorders (thyroid, kidney, etc.)? *<label>
                                <label class="radio-inline">
                                    <input type="radio" name="option26" value="male" checked>Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="option26" value="female"> No
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Epilepsy? *<label>
                                <label class="radio-inline">
                                    <input type="radio" name="option27" value="male" checked>Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="option27" value="female"> No
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Asthma? *<label>
                                <label class="radio-inline">
                                    <input type="radio" name="option28" value="male" checked>Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="option28" value="female"> No
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Back pain: upper, middle, lower? *<label>
                                <label class="radio-inline">
                                    <input type="radio" name="option29" value="male" checked>Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="option29" value="female"> No
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Other joint pain (explain on back of form)? *<label>
                                <label class="radio-inline">
                                    <input type="radio" name="option30" value="male" checked>Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="option30" value="female"> No
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Muscle pain or an injury (explain on back of Form)? *<label>
                                <label class="radio-inline">
                                    <input type="radio" name="option31" value="male" checked>Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="option31" value="female"> No
                                </label>
                            </div>

                            <h5>To the best of my knowledge, the above information is true.</h5>

                            <div class="form-group">
                                <label>Sign Name (Type your name) *</label>
                                <input type="text" name="first_name" id="first_name" class="form-control" />
                                <span id="error_first_name" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>Date *</label>
                                <input type="date" name="last_name" id="last_name" class="form-control" />
                                <span id="error_last_name" class="text-danger"></span>
                            </div>
                        </div>
                        <br />
                        <div>
                            <button type="button" name="previous_btn_personal_details" id="previous_btn_personal_details" class="btn btn-default btn-lg">Previous</button>
                            <button type="button" name="btn_personal_details" id="btn_personal_details" class="btn btn-info btn-lg">Next</button>
                        </div>
                        <br />
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="contact_details">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h2> Thank You </h2>
                        <div>
                            <button type="button" name="previous_btn_contact_details" id="previous_btn_contact_details" class="btn btn-default btn-lg">Previous</button>
                            <input type="submit" name="btn_contact_details" id="btn_contact_details" class="btn btn-success btn-lg" value="Register" />
                        </div>
                        <br />
                    </div>
                </div>
            </div>

        </form>
    </div>

</body>

</html>