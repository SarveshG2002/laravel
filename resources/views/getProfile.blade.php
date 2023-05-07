@include('layouts.header')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .button-div {
        cursor: pointer;
        border-radius: 5px;
        transition: background-color 0.3s;
    }
    
    .button-div:hover {
        background-color: #e6e6e6;
    }
    
    .edit-button {
        background-color: #007bff;
        color: #fff;
        width: 70%;
    }
    
    .view-button {
        background-color: #6c757d;
        color: #fff;
        width: 30%;
    }
    </style>
    <style>
		.container-view {
			display: flex;
			flex-wrap: wrap;
			gap: 20px;
		}
		.box {
			padding: 10px;
			border-radius: 10px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
			background-color: #fff;
			width: 90%;
			
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
            margin: 10px auto;
		}
		.degree {
			font-size: 24px;
			font-weight: bold;
			margin-bottom: 10px;
			
		}
		.university {
			font-size: 18px;
			
		}
	</style>
</head>

<body>
    <section style="background-color: #eee;">
        <div class="container py-5">
            <!-- <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">User</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                        </ol>
                    </nav>
                </div>
            </div> -->

            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                                alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3" id='name_p'></h5>
                            <p class="text-muted mb-1" id="mail_p"></p>
                            <p class="text-muted mb-4" id="addr_p"></p>
                            <div class="d-flex justify-content-center mb-2">
                                <button type="button" class="btn btn-primary">Follow</button>
                                <button type="button" class="btn btn-outline-primary ms-1">Message</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-8" id="personlInfo">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-sm-4">
                                    <div class="form-outline">
                                        <input type="text" id="fname" class="form-control" oninput="show_profile()" />
                                        <label class="form-label" for="form10Example1">First Name</label>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-outline">
                                        <input type="text" id="mname" class="form-control" />
                                        <label class="form-label" for="form10Example2">Middle Name</label>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-outline">
                                        <input type="text" id="lname" class="form-control" oninput="show_profile()" />
                                        <label class="form-label" for="form10Example3">Last Name</label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-outline">
                                        <input type="text" id="phone" class="form-control" />
                                        <label class="form-label" for="form10Example1">Phone</label>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-outline">
                                        <input type="text" id="mobile" class="form-control" />
                                        <label class="form-label" for="form10Example1">Mobile</label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-outline">
                                        <input type="text" id="mail" class="form-control" oninput="show_profile()" />
                                        <label class="form-label" for="form10Example2">Mail</label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row mb-4">
                                <div class="col-sm">
                                    <div class="form-outline">
                                        <input type="text" id="addr" class="form-control" oninput="show_profile()" />
                                        <label class="form-label" for="form10Example2">Address</label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="d-block">
                                <button type="button" class="btn btn-primary mb-4"
                                    onclick="changeToProfetional()">Next</button>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-8" id="profetionalInfo" style='display: none'>
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-sm">
                                    <div class="form-outline">
                                        <input type="text" id="profession" class="form-control" oninput="show_profile()" />
                                        <label class="form-label" for="form10Example1">Your Profetion (backend
                                            developer, frontend devloper ..)</label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row mb-4">
                                <div class="col-sm-6">
                                    <div class="d-flex justify-content-between">
                                        <div class="p-2 button-div edit-button"  data-mdb-toggle="modal" data-mdb-target="#AddEducationModel">+ Add your Education</div>
                                        <div class="p-2 button-div view-button" data-mdb-toggle="modal" id="education_count" data-mdb-target="#ViewEducationModel" onclick="show_education()">View</div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex justify-content-between">
                                        <div class="p-2 button-div edit-button" data-mdb-toggle="modal" data-mdb-target="#AddExperienceModel">+ Add your experience</div>
                                        <div class="p-2 button-div view-button" data-mdb-toggle="modal" id="experience_count" data-mdb-target="#ViewExperienceModel" onclick="show_experience()">View</div>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="d-flex justify-content-between">
                                        <div class="p-2 button-div edit-button" data-mdb-toggle="modal" data-mdb-target="#AddCertificateModel">+ Add your Certificates</div>
                                        <div class="p-2 button-div view-button" data-mdb-toggle="modal" id="certificate_count" data-mdb-target="#ViewCertificateModel" onclick="show_certificate()">View</div>
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <div class="row mb-4">
                                <div class="form-outline">
                                    <textarea class="form-control" id="about" rows="4"></textarea>
                                    <label class="form-label" for="textAreaExample">About your self</label>
                                </div>
                            </div>
                            <hr>
                            <div class="d-block">
                                <button class="btn btn-primary mb-4" onclick='changeToPersonal()'>Back</button>
                            </div>
                            <div class="d-block">
                                <button class="btn btn-primary mb-4">Save</button>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>

        

       

        <!-- Modal for add education -->
        <div class="modal fade" id="AddEducationModel" tabindex="-1" aria-labelledby="AddEducationModelLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="AddEducationModelLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="form">
                        <div class="form-outline">
                            <input type="text" id="degree" class="form-control mb-4"/>
                            <label class="form-label" for="form10Example1">Degree</label>
                        </div>
                        <div class="form-outline">
                            <input type="text" id="univercity" class="form-control mb-4" />
                            <label class="form-label" for="form10Example1">Univercity</label>
                        </div>
                        <div class="form-outline">
                            <input type="number" id="year" class="form-control mb-4" min="1900" max="2099"/>
                            <label class="form-label" for="form10Example1">Year of completion</label>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal" >Close</button>
                    <button type="button" class="btn btn-primary" onclick="add_education()">Add degree</button>
                </div>
                </div>
            </div>
        </div>

        <!-- model for education view -->
        <div class="modal fade" id="ViewEducationModel" tabindex="-1" aria-labelledby="ViewEducationModelLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ViewEducationModelLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="education_view">

                    <!-- <div class="container_view">
                        <div class="box">
                            <div class="degree">BSCIT (2022)</div>
                            <div class="university">Mumbai University</div>
                        </div>
                    </div> -->

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal" >Close</button>
                   
                </div>
                </div>
            </div>
        </div>




        <!-- Modal for add Experience -->
        <div class="modal fade" id="AddExperienceModel" tabindex="-1" aria-labelledby="AddExperienceModelLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="AddExperienceModelLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="form">
                        <div class="form-outline">
                            <input type="text" id="post" class="form-control mb-4"/>
                            <label class="form-label" for="post">Post/Designation</label>
                        </div>
                        <div class="form-outline">
                            <input type="text" id="company" class="form-control mb-4" />
                            <label class="form-label" for="company">Company</label>
                        </div>
                        <div class="form-outline">
                            <input type="number" id="eyears" class="form-control mb-4" min="1900" max="2099"/>
                            <label class="form-label" for="eyears">Years of Experience</label>
                        </div>
                        <div class="form-outline">
                            <input type="number" id="emonths" class="form-control mb-4" min="1900" max="2099"/>
                            <label class="form-label" for="emonths">Months of Experience</label>
                        </div>
                        <label for="current_work">Are you woking here currently?</label>
                        <div>
                            <select class="form-control mdb-select" id="current_work" style="border: 1px solid #bdbdbd;color: #bdbdbd;border-radius: 2px;">
                                <option value="no">No, I am not working here now</option>
                                <option value="yes">Yes, I am currently working here</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal" >Close</button>
                    <button type="button" class="btn btn-primary" onclick="add_experience()">Add degree</button>
                </div>
                </div>
            </div>
        </div>

        <!-- model for Experience view -->
        <div class="modal fade" id="ViewExperienceModel" tabindex="-1" aria-labelledby="ViewExperienceModelLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ViewExperienceModelLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="experience_view">

                    <!-- <div class="container_view">
                        <div class="box">
                            <div class="degree">BSCIT (2022)</div>
                            <div class="university">Mumbai University</div>
                        </div>
                    </div> -->
                    Experience

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal" >Close</button>
                   
                </div>
                </div>
            </div>
        </div>



        <!-- Modal for add certificates -->
        <div class="modal fade" id="AddCertificateModel" tabindex="-1" aria-labelledby="AddCertificateModelLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="AddCertificateModelLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="form">
                        <div class="form-outline">
                            <input type="text" id="certificate" class="form-control mb-4"/>
                            <label class="form-label" for="certificate">Certificate Name</label>
                        </div>
                        <div class="form-outline">
                            <input type="text" id="institute" class="form-control mb-4" />
                            <label class="form-label" for="institute">Institute</label>
                        </div>
                        <div class="form-outline">
                            <input type="number" id="cyear" class="form-control mb-4" min="1900" max="2099"/>
                            <label class="form-label" for="cyear">Year of completion</label>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal" >Close</button>
                    <button type="button" class="btn btn-primary" onclick="add_certificate()">Add degree</button>
                </div>
                </div>
            </div>
        </div>

        <!-- model for certificates view -->
        <div class="modal fade" id="ViewCertificateModel" tabindex="-1" aria-labelledby="ViewCertificateModelLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ViewCertificateModelLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="certificate_view">

                    <!-- <div class="container_view">
                        <div class="box">
                            <div class="degree">BSCIT (2022)</div>
                            <div class="university">Mumbai University</div>
                        </div>
                    </div> -->
                    Certificate

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal" >Close</button>
                   
                </div>
                </div>
            </div>
        </div>




    </section>
    <script>
        let education_data=[]
        let experience_data=[]
        let certificate_data=[]
        let total=0
        function show_profile() {
            let fname = document.getElementById('fname').value;
            let lname = document.getElementById('lname').value;
            let mail = document.getElementById('mail').value;
            let addr = document.getElementById('addr').value;
            document.getElementById('name_p').innerText = fname + " " + lname
            document.getElementById('mail_p').innerText = mail
            document.getElementById('addr_p').innerText = addr
        }
        function changeToProfetional() {
            document.getElementById('profetionalInfo').style.display = 'block';
            document.getElementById('personlInfo').style.display = 'none';
        }
        function changeToPersonal() {
            document.getElementById('profetionalInfo').style.display = 'none';
            document.getElementById('personlInfo').style.display = 'block';
        }
        function add_education(){
            let d=document.getElementById('degree').value
            let u=document.getElementById('univercity').value
            let y=document.getElementById('year').value
            education_data.push({degree:d,univercity:u,year:y})
            document.getElementById('degree').value=''
            document.getElementById('univercity').value=''
            document.getElementById('year').value=''
            document.getElementById('education_count').innerHTML='View ('+education_data.length+")"
        }
        function add_experience(){
            let p=document.getElementById('post').value
            let c=document.getElementById('company').value
            let ey=document.getElementById('eyears').value
            let em=document.getElementById('emonths').value
            experience_data.push({post:p,company:c,years:ey,months:em})
            document.getElementById('post').value=""
            document.getElementById('company').value=""
            document.getElementById('eyears').value=""
            document.getElementById('emonths').value=""
            
            let months=(parseInt(ey)*12)+parseInt(em)
            total=total+months
            document.getElementById('experience_count').innerHTML='View ('+total+" months)"
        }
        function add_certificate(){
            let c=document.getElementById('certificate').value
            let i=document.getElementById('institute').value
            let cy=document.getElementById('cyear').value
            certificate_data.push({certificate:c,institute:i,year:cy})
            document.getElementById('certificate').value=''
            document.getElementById('institute').value=''
            document.getElementById('cyear').value=''
            document.getElementById('certificate_count').innerHTML='View ('+certificate_data.length+")"
        }
        function show_education(){
            let data=''
            for(let i=0;i<education_data.length;i++){
                education_data[i]
                data=data+`
                    <div class="container_view">
                        <div class="box">
                            <div class="degree">${education_data[i].degree} (${education_data[i].year} )</div>
                            <div class="university">${education_data[i].univercity}</div>
                            <button onclick="deleteElement('education',${i})">Delete</button>
                        </div>
                    </div>
                `
            }
            document.getElementById('education_view').innerHTML=data
        }
        function show_experience(){
            let data=''
            for(let i=0;i<experience_data.length;i++){
                experience_data[i]
                data=data+`
                    <div class="container_view">
                        <div class="box">
                            <div class="degree">${experience_data[i].post} (${experience_data[i].years} years ${experience_data[i].months} months)</div>
                            <div class="university">${experience_data[i].company}</div>
                            <button onclick="deleteElement('experience',${i})">Delete</button>
                        </div>
                    </div>
                `
            }
            document.getElementById('experience_view').innerHTML=data
        }
        function show_certificate(){
            let data=''
            for(let i=0;i<certificate_data.length;i++){
                certificate_data[i]
                data=data+`
                    <div class="container_view">
                        <div class="box">
                            <div class="degree">${certificate_data[i].certificate} (${certificate_data[i].year})</div>
                            <div class="university">${certificate_data[i].institute}</div>
                            <button onclick="deleteElement('certificate',${i})">Delete</button>
                        </div>
                    </div>
                `
            }
            document.getElementById('certificate_view').innerHTML=data
        }
        function deleteElement(field,i){
            if(field=='education'){
                education_data.splice(i, 1)
                show_education()
                document.getElementById('education_count').innerHTML='View ('+education_data.length+")"
            }
            else if(field=='experience'){
                
                let months=(parseInt(experience_data[i].years)*12)+parseInt(experience_data[i].months)
                total=total-months
                document.getElementById('experience_count').innerHTML='View ('+total+" months)"
                experience_data.splice(i, 1)
                show_experience()
            }
            else if(field=='certificate'){
                certificate_data.splice(i, 1)
                show_certificate()
                document.getElementById('certificate_count').innerHTML='View ('+certificate_data.length+")"
            }
        }
    </script>
</body>
@include('layouts.footer')

</html>