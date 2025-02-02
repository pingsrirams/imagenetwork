 	<!-- Page Header

    ============================================= -->

    <section class="page-header page-header-text-light bg-secondary">

      <div class="container">

        <div class="row align-items-center">

          <div class="col-md-8">

            <h1>My Profile</h1>

          </div>

          <div class="col-md-4">

            <ul class="breadcrumb justify-content-start justify-content-md-end mb-0">

              <li><a href="<?php echo $mainurl; ?>">Home</a></li>

              <li class="active">My Profile</li>

            </ul>

          </div>

        </div>

      </div>

    </section><!-- Page Header end -->

    

  <!-- Content

  ============================================= -->

  <div id="content">

    <div class="container">

      <div class="bg-light shadow-md rounded p-4">

        <div class="row">

          <div class="col-md-3">

            <ul class="nav nav-tabs flex-column" id="myTab" role="tablist">

              <li class="nav-item"> <a class="nav-link active" id="first-tab" data-toggle="tab" href="#firstTab" role="tab" aria-controls="firstTab" aria-selected="true">Personal Information</a> </li>

              <li class="nav-item"> <a class="nav-link" id="second-tab" data-toggle="tab" href="#secondTab" role="tab" aria-controls="secondTab" aria-selected="false">Change Password</a> </li>

              <li class="nav-item"> <a class="nav-link" id="third-tab" data-toggle="tab" href="#thirdTab" role="tab" aria-controls="thirdTab" aria-selected="false">Order</a> </li>

              <li class="nav-item"> <a class="nav-link" id="fourth-tab" data-toggle="tab" href="#fourthTab" role="tab" aria-controls="fourthTab" aria-selected="false">Support</a> </li>

            </ul>

          </div>

          <div class="col-md-9">

            <div class="tab-content my-3" id="myTabContentVertical">

              <div class="tab-pane fade show active" id="firstTab" role="tabpanel" aria-labelledby="first-tab">

                <div class="row">

                  <div class="col-lg-12">

                    <h4 class="mb-4">Personal Information</h4>

                    <form id="personalInformation" method="post">

                      <div class="mb-3">

                        <div class="custom-control custom-radio custom-control-inline">

                          <input id="male" name="profile" class="custom-control-input" checked="" required type="radio">

                          <label class="custom-control-label" for="male">Male</label>

                        </div>

                        <div class="custom-control custom-radio custom-control-inline">

                          <input id="female" name="profile" class="custom-control-input" required type="radio">

                          <label class="custom-control-label" for="female">Female</label>

                        </div>

                      </div>

                      <div class="form-group">

                        <label for="fullName">Full Name</label>

                        <input type="text" value="Johne Cary" class="form-control" data-bv-field="fullName" id="fullName" required placeholder="Full Name">

                      </div>

                      <div class="form-group">

                        <label for="mobileNumber">Mobile Number</label>

                        <input type="text" value="9898989898" class="form-control" data-bv-field="mobilenumber" id="mobileNumber" required placeholder="Mobile Number">

                      </div>

                      <div class="form-group">

                        <label for="emailID">Email ID</label>

                        <input type="text" value="jhonecary2018@gmail.com" class="form-control" data-bv-field="emailid" id="emailID" required placeholder="Email ID">

                      </div>

                      <div class="form-group">

                        <label for="birthDate">Date of Birth</label>

                        <input id="birthDate" value="06-09-2002" type="text" class="form-control" required placeholder="Date of Birth">

                      </div>

                      <div class="form-group">

                        <label for="inputCountry">Country</label>

                        <select class="custom-select" id="inputCountry" name="country_id">

                          <option value=""> --- Please Select --- </option>

                          <option value="244">Aaland Islands</option>

                          <option value="1">Afghanistan</option>

                          <option value="2">Albania</option>

                          <option value="3">Algeria</option>

                          <option value="4">American Samoa</option>

                          <option value="5">Andorra</option>

                          <option value="6">Angola</option>

                          <option value="7">Anguilla</option>

                          <option value="8">Antarctica</option>

                          <option value="9">Antigua and Barbuda</option>

                          <option value="10">Argentina</option>

                          <option value="11">Armenia</option>

                          <option value="12">Aruba</option>

                          <option value="252">Ascension Island (British)</option>

                          <option value="13">Australia</option>

                          <option value="14">Austria</option>

                          <option value="15">Azerbaijan</option>

                          <option value="16">Bahamas</option>

                          <option value="17">Bahrain</option>

                          <option value="18">Bangladesh</option>

                          <option value="19">Barbados</option>

                          <option value="20">Belarus</option>

                          <option value="21">Belgium</option>

                          <option value="22">Belize</option>

                          <option value="23">Benin</option>

                          <option value="24">Bermuda</option>

                          <option value="25">Bhutan</option>

                          <option value="26">Bolivia</option>

                          <option value="245">Bonaire, Sint Eustatius and Saba</option>

                          <option value="27">Bosnia and Herzegovina</option>

                          <option value="28">Botswana</option>

                          <option value="29">Bouvet Island</option>

                          <option value="30">Brazil</option>

                          <option value="31">British Indian Ocean Territory</option>

                          <option value="32">Brunei Darussalam</option>

                          <option value="33">Bulgaria</option>

                          <option value="34">Burkina Faso</option>

                          <option value="35">Burundi</option>

                          <option value="36">Cambodia</option>

                          <option value="37">Cameroon</option>

                          <option value="38">Canada</option>

                          <option value="251">Canary Islands</option>

                          <option value="39">Cape Verde</option>

                          <option value="40">Cayman Islands</option>

                          <option value="41">Central African Republic</option>

                          <option value="42">Chad</option>

                          <option value="43">Chile</option>

                          <option value="44">China</option>

                          <option value="45">Christmas Island</option>

                          <option value="46">Cocos (Keeling) Islands</option>

                          <option value="47">Colombia</option>

                          <option value="48">Comoros</option>

                          <option value="49">Congo</option>

                          <option value="50">Cook Islands</option>

                          <option value="51">Costa Rica</option>

                          <option value="52">Cote D'Ivoire</option>

                          <option value="53">Croatia</option>

                          <option value="54">Cuba</option>

                          <option value="246">Curacao</option>

                          <option value="55">Cyprus</option>

                          <option value="56">Czech Republic</option>

                          <option value="237">Democratic Republic of Congo</option>

                          <option value="57">Denmark</option>

                          <option value="58">Djibouti</option>

                          <option value="59">Dominica</option>

                          <option value="60">Dominican Republic</option>

                          <option value="61">East Timor</option>

                          <option value="62">Ecuador</option>



                          <option value="63">Egypt</option>

                          <option value="64">El Salvador</option>

                          <option value="65">Equatorial Guinea</option>

                          <option value="66">Eritrea</option>

                          <option value="67">Estonia</option>

                          <option value="68">Ethiopia</option>

                          <option value="69">Falkland Islands (Malvinas)</option>

                          <option value="70">Faroe Islands</option>

                          <option value="71">Fiji</option>

                          <option value="72">Finland</option>

                          <option value="74">France, Metropolitan</option>

                          <option value="75">French Guiana</option>

                          <option value="76">French Polynesia</option>

                          <option value="77">French Southern Territories</option>

                          <option value="126">FYROM</option>

                          <option value="78">Gabon</option>

                          <option value="79">Gambia</option>

                          <option value="80">Georgia</option>

                          <option value="81">Germany</option>

                          <option value="82">Ghana</option>

                          <option value="83">Gibraltar</option>

                          <option value="84">Greece</option>

                          <option value="85">Greenland</option>

                          <option value="86">Grenada</option>

                          <option value="87">Guadeloupe</option>

                          <option value="88">Guam</option>

                          <option value="89">Guatemala</option>

                          <option value="256">Guernsey</option>

                          <option value="90">Guinea</option>

                          <option value="91">Guinea-Bissau</option>

                          <option value="92">Guyana</option>

                          <option value="93">Haiti</option>

                          <option value="94">Heard and Mc Donald Islands</option>

                          <option value="95">Honduras</option>

                          <option value="96">Hong Kong</option>

                          <option value="97">Hungary</option>

                          <option value="98">Iceland</option>

                          <option value="99">India</option>

                          <option value="100">Indonesia</option>

                          <option value="101">Iran (Islamic Republic of)</option>

                          <option value="102">Iraq</option>

                          <option value="103">Ireland</option>

                          <option value="254">Isle of Man</option>

                          <option value="104">Israel</option>

                          <option value="105">Italy</option>

                          <option value="106">Jamaica</option>

                          <option value="107">Japan</option>

                          <option value="257">Jersey</option>

                          <option value="108">Jordan</option>

                          <option value="109">Kazakhstan</option>

                          <option value="110">Kenya</option>

                          <option value="111">Kiribati</option>

                          <option value="113">Korea, Republic of</option>

                          <option value="253">Kosovo, Republic of</option>

                          <option value="114">Kuwait</option>

                          <option value="115">Kyrgyzstan</option>

                          <option value="116">Lao People's Democratic Republic</option>

                          <option value="117">Latvia</option>

                          <option value="118">Lebanon</option>

                          <option value="119">Lesotho</option>

                          <option value="120">Liberia</option>

                          <option value="121">Libyan Arab Jamahiriya</option>

                          <option value="122">Liechtenstein</option>

                          <option value="123">Lithuania</option>

                          <option value="124">Luxembourg</option>

                          <option value="125">Macau</option>

                          <option value="127">Madagascar</option>

                          <option value="128">Malawi</option>

                          <option value="129">Malaysia</option>

                          <option value="130">Maldives</option>

                          <option value="131">Mali</option>

                          <option value="132">Malta</option>

                          <option value="133">Marshall Islands</option>

                          <option value="134">Martinique</option>

                          <option value="135">Mauritania</option>

                          <option value="136">Mauritius</option>

                          <option value="137">Mayotte</option>

                          <option value="138">Mexico</option>

                          <option value="139">Micronesia, Federated States of</option>

                          <option value="140">Moldova, Republic of</option>

                          <option value="141">Monaco</option>

                          <option value="142">Mongolia</option>

                          <option value="242">Montenegro</option>

                          <option value="143">Montserrat</option>

                          <option value="144">Morocco</option>

                          <option value="145">Mozambique</option>

                          <option value="146">Myanmar</option>

                          <option value="147">Namibia</option>

                          <option value="148">Nauru</option>

                          <option value="149">Nepal</option>

                          <option value="150">Netherlands</option>

                          <option value="151">Netherlands Antilles</option>

                          <option value="152">New Caledonia</option>

                          <option value="153">New Zealand</option>

                          <option value="154">Nicaragua</option>

                          <option value="155">Niger</option>

                          <option value="156">Nigeria</option>

                          <option value="157">Niue</option>

                          <option value="158">Norfolk Island</option>

                          <option value="112">North Korea</option>

                          <option value="159">Northern Mariana Islands</option>

                          <option value="160">Norway</option>

                          <option value="161">Oman</option>

                          <option value="162">Pakistan</option>

                          <option value="163">Palau</option>

                          <option value="247">Palestinian Territory, Occupied</option>

                          <option value="164">Panama</option>

                          <option value="165">Papua New Guinea</option>

                          <option value="166">Paraguay</option>

                          <option value="167">Peru</option>

                          <option value="168">Philippines</option>

                          <option value="169">Pitcairn</option>

                          <option value="170">Poland</option>

                          <option value="171">Portugal</option>

                          <option value="172">Puerto Rico</option>

                          <option value="173">Qatar</option>

                          <option value="174">Reunion</option>

                          <option value="175">Romania</option>

                          <option value="176">Russian Federation</option>

                          <option value="177">Rwanda</option>

                          <option value="178">Saint Kitts and Nevis</option>

                          <option value="179">Saint Lucia</option>

                          <option value="180">Saint Vincent and the Grenadines</option>

                          <option value="181">Samoa</option>

                          <option value="182">San Marino</option>

                          <option value="183">Sao Tome and Principe</option>

                          <option value="184">Saudi Arabia</option>

                          <option value="185">Senegal</option>

                          <option value="243">Serbia</option>

                          <option value="186">Seychelles</option>

                          <option value="187">Sierra Leone</option>

                          <option value="188">Singapore</option>

                          <option value="189">Slovak Republic</option>

                          <option value="190">Slovenia</option>

                          <option value="191">Solomon Islands</option>

                          <option value="192">Somalia</option>

                          <option value="193">South Africa</option>

                          <option value="194">South Georgia &amp; South Sandwich Islands</option>

                          <option value="248">South Sudan</option>

                          <option value="195">Spain</option>

                          <option value="196">Sri Lanka</option>

                          <option value="249">St. Barthelemy</option>

                          <option value="197">St. Helena</option>

                          <option value="250">St. Martin (French part)</option>

                          <option value="198">St. Pierre and Miquelon</option>

                          <option value="199">Sudan</option>

                          <option value="200">Suriname</option>

                          <option value="201">Svalbard and Jan Mayen Islands</option>

                          <option value="202">Swaziland</option>

                          <option value="203">Sweden</option>

                          <option value="204">Switzerland</option>

                          <option value="205">Syrian Arab Republic</option>

                          <option value="206">Taiwan</option>

                          <option value="207">Tajikistan</option>

                          <option value="208">Tanzania, United Republic of</option>

                          <option value="209">Thailand</option>

                          <option value="210">Togo</option>

                          <option value="211">Tokelau</option>

                          <option value="212">Tonga</option>

                          <option value="213">Trinidad and Tobago</option>

                          <option value="255">Tristan da Cunha</option>

                          <option value="214">Tunisia</option>

                          <option value="215">Turkey</option>

                          <option value="216">Turkmenistan</option>

                          <option value="217">Turks and Caicos Islands</option>

                          <option value="218">Tuvalu</option>

                          <option value="219">Uganda</option>

                          <option value="220">Ukraine</option>

                          <option value="221">United Arab Emirates</option>

                          <option value="222">United Kingdom</option>

                          <option selected="selected" value="223">United States</option>

                          <option value="224">United States Minor Outlying Islands</option>

                          <option value="225">Uruguay</option>

                          <option value="226">Uzbekistan</option>

                          <option value="227">Vanuatu</option>

                          <option value="228">Vatican City State (Holy See)</option>

                          <option value="229">Venezuela</option>

                          <option value="230">Viet Nam</option>

                          <option value="231">Virgin Islands (British)</option>

                          <option value="232">Virgin Islands (U.S.)</option>

                          <option value="233">Wallis and Futuna Islands</option>

                          <option value="234">Western Sahara</option>

                          <option value="235">Yemen</option>

                          <option value="238">Zambia</option>

                          <option value="239">Zimbabwe</option>

                        </select>

                      </div>

                      <button class="btn btn-primary" type="submit">Update Now</button>

                    </form>

                  </div>

                 

                </div>

              </div>

              <div class="tab-pane fade" id="secondTab" role="tabpanel" aria-labelledby="second-tab">

                <div class="row">

                  <div class="col-lg-8">

                    <h4 class="mb-4">Change Password</h4>

                    <form id="changePassword" method="post">

                      <div class="form-group">

                        <input type="text" class="form-control" data-bv-field="existingpassword" id="existingPassword" required placeholder="Existing Password">

                      </div>

                      <div class="form-group">

                        <input type="text" class="form-control" data-bv-field="newpassword" id="newPassword" required placeholder="New Password">

                      </div>

                      <div class="form-group">

                        <input type="text" class="form-control" data-bv-field="confirmgpassword" id="confirmPassword" required placeholder="Confirm Password">

                      </div>

                      <button class="btn btn-primary" type="submit">Update Password</button>

                    </form>

                  </div>

                  <div class="col-lg-4 mt-4 mt-lg-0 ">

                    <div class="card bg-light-3 p-3">

                      <p class="mb-2">We value your Privacy.</p>

                      <p class="text-1 mb-0">We will not sell or distribute your contact information. Read our <a href="#">Privacy Policy</a>.</p>

                      <hr>

                      <p class="mb-2">Billing Enquiries</p>

                      <p class="text-1 mb-0">Do not hesitate to reach our <a href="#">support team</a> if you have any queries.</p>

                    </div>

                  </div>

                </div>

              </div>

              <div class="tab-pane fade" id="thirdTab" role="tabpanel" aria-labelledby="third-tab">

                <h4 class="mb-4">Your Order Status</h4>

                <div class="table-responsive-md">

              <table class="table table-hover border">

                <thead class="thead-light">

                  <tr>

                    <th>Date</th>

                    <th>Description</th>

                    <th>Order ID</th>

                    <th class="text-center">Status</th>

                    <th class="text-right">Amount</th>

                    

                  </tr>

                </thead>

                <tbody>

                  <tr>

                    <td class="align-middle">06/06/2018</td>

                    <td class="align-middle"><span class="text-1 d-inline-flex">Mega Pack</span></td>

                    <td class="align-middle">5286977475</td>

                    <td class="align-middle text-center"><i class="fas fa-check-circle text-4 text-success" data-toggle="tooltip" data-original-title="Your order is Successful"></i></td>

                    <td class="align-middle text-right">$150</td>

                    

                  </tr>

                  

                  <tr>

                    <td class="align-middle">21/05/2018</td>

                    <td class="align-middle"><span class="text-1 d-inline-flex">Sports Pack</span></td>

                    <td class="align-middle">3079317986</td>

                    <td class="align-middle text-center"><i class="fas fa-times-circle text-4 text-danger" data-toggle="tooltip" data-original-title="Your order is Failed"></i></td>

                    <td class="align-middle text-right">$280</td>

                    

                  </tr>

                </tbody>

              </table>

            </div>

              </div>

              <div class="tab-pane fade" id="fourthTab" role="tabpanel" aria-labelledby="fourth-tab">

                <div class="col-lg-12">

            <h4 class="mb-4">Your Support Ticket Status</h5>

            <div class="table-responsive-md">

              <table class="table table-hover border">

                <thead class="thead-light">

                  <tr>

                    <th>Date</th>

                    <th>Description</th>

                    <th>Ticket ID</th>

                    <th class="text-center">Status</th>

                    <th class="text-right">Action</th>

                    

                  </tr>

                </thead>

                <tbody>

                  <tr>

                    <td class="align-middle">06/06/2018</td>

                    <td class="align-middle"><span class="text-1 d-inline-flex">Mega Pack</span></td>

                    <td class="align-middle">5286977475</td>

                    <td class="align-middle text-center"><i class="fas fa-check-circle text-4 text-success" data-toggle="tooltip" data-original-title="Your order is Successful"></i></td>

                    <td class="align-middle text-right">

					<button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#ticket_status_action">

						  <i class="fa fa-edit"></i>

						</button>

						</td>

                    

                  </tr>

                  

                  <tr>

                    <td class="align-middle">21/05/2018</td>

                    <td class="align-middle"><span class="text-1 d-inline-flex">Sports Pack</span></td>

                    <td class="align-middle">3079317986</td>

                    <td class="align-middle text-center"><i class="fas fa-times-circle text-4 text-danger" data-toggle="tooltip" data-original-title="Your order is Failed"></i></td>

                    <td class="align-middle text-right"><button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#ticket_status_action">

						  <i class="fa fa-edit"></i>

						</button></td>

                    

                  </tr>

                </tbody>

              </table>

            </div>

          </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div><!-- Content end -->
  
  <!-- Script -->

<script src="vendor/jquery/jquery.min.js"></script>

<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="vendor/owl.carousel/owl.carousel.min.js"></script> 

<script src="vendor/daterangepicker/moment.min.js"></script> 

<script src="vendor/daterangepicker/daterangepicker.js"></script> 

<script>

$(function() {

 'use strict';

  // Depart Date

  $('#birthDate').daterangepicker({

	singleDatePicker: true,

	"showDropdowns": true,

	autoUpdateInput: false,

	maxDate: moment().add(0, 'days'),

	}, function(chosen_date) {

  $('#birthDate').val(chosen_date.format('MM-DD-YYYY'));

  });

  });

</script>

<script src="js/theme.js"></script> 





<!-- Modal -->

<div class="modal fade" id="ticket_status_action" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>

      <div class="modal-body">

       

      </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        <button type="button" class="btn btn-primary">Save changes</button>

      </div>

    </div>

  </div>

</div>
