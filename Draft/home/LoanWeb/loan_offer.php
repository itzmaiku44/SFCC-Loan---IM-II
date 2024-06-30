<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SFCC Loans Offers</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body> -->
<div class="container">
        <div class="title2">Discover the types of SFCC Loans</div>
        <div class="cards">
            <!-- Auto Loan Promo Card -->
            <div class="card">
                <img src="Loan/image/auto_loan.png" alt="Auto Loan Promo">
                <div class="card-title">Auto Loan Promo</div>
                <div class="card-description">Low rates, rebate up to ₱30,000, and more. Go to SFCC Loans on Wheels. Offer is until June 30, 2024.</div>
                <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#applyModal-AutoLoanPromo">Apply Now</a>
                <a href="#" class="btn learn-more" data-bs-toggle="modal" data-bs-target="#learnMoreModal-AutoLoanPromo">Learn More</a>
            </div>

            <!-- Modal for Apply Now: Auto Loan Promo -->
            <div class="modal fade" id="applyModal-AutoLoanPromo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Apply for Auto Loan Promo</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Fill out the form to apply for the Auto Loan Promo.<br>
                            <label for="myfile">Select a file:</label> <input type="file" id="myfile" name="myfile">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Submit Application</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal for Learn More: Auto Loan Promo -->
            <div class="modal fade" id="learnMoreModal-AutoLoanPromo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Learn More About Auto Loan Promo</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <img src="Loan/image/auto_loanmodal.png" alt="Home Loan">
                        Get your hands on those brand-new wheels! Enjoy affordable cash-out options, low-interest rates, and fast processing with SFCC Auto Loan!
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Home Loan Card -->
            <div class="card">
                <img src="Loan/image/home_loan.png" alt="Home Loan">
                <div class="card-title">Home Loan</div>
                <div class="card-description">Get low rates and free appraisal when you apply online until June 30, 2024.</div><br>
                <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#applyModal-HomeLoan">Apply Now</a>
                <a href="#" class="btn learn-more" data-bs-toggle="modal" data-bs-target="#learnMoreModal-HomeLoan">Learn More</a>
            </div>

            <!-- Modal for Apply Now: Home Loan -->
            <div class="modal fade" id="applyModal-HomeLoan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Apply for Home Loan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Fill out the form to apply for the Home Loan.
                        <!-- INSERT content -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Submit Application</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal for Learn More: Home Loan -->
            <div class="modal fade" id="learnMoreModal-HomeLoan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Learn More About Home Loan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <img src="Loan/image/home_loanmodal.png" alt="Home Loan">
                        Whether you plan to buy a property, build a new home or refurbish an existing one, there's a SFCC Home Loan for you.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SME Loan Card -->
            <div class="card">
                <img src="Loan/image/sme_loan.png" alt="SME Loan">
                <div class="card-title">SME Loan</div>
                <div class="card-description">Save up to ₱30,000 in loan fees with SFCC Loans SME Loan until October 31, 2024.</div><br>
                <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#applyModal-SMELoan">Apply Now</a>
                <a href="#" class="btn learn-more" data-bs-toggle="modal" data-bs-target="#learnMoreModal-SMELoan">Learn More</a>
            </div>

            <!-- Modal for Apply Now: SME Loan -->
            <div class="modal fade" id="applyModal-SMELoan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Apply for SME Loan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <h2><p align="center">Real Estate Property<br> Requirements for <br>CONDO UNITS</h2></p>
                                        ------------------------------------------------------------------------
                                        <br><h3>Primary</h3>
                                        <ul>
                                        <li>Owners Copy of Condominium Title.</li>
                                        <li>Latest Certified True Copy of Title at Registry of Deeds</li>
                                        <li>Floor Plan with vicinity map </li>
                                        <li>Latest Certified True Copy of Tax Declaration</li>
                                        </ul><h3>Secondary</h3><ul>
                                        <li>Latest Certified True Copy of Tax Clearance</li>
                                        <li>Source Documents(Deed of Sale)</li>
                                        <li>Proof of Income</li>
                                        <li>Tin Number</li>
                                        </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Submit Application</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal for Learn More: SME Loan -->
            <div class="modal fade" id="learnMoreModal-SMELoan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Learn More About SME Loan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <img src="Loan/image/sme_loanmodal.png" alt="SME Loan">
                        Carry on with your plans, get funds for your business needs.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Personal Loan Card -->
            <div class="card">
                <img src="Loan/image/personal_loan.png" alt="Personal Loan">
                <div class="card-title">Personal Loan</div>
                <div class="card-description">Carry on with your plans, get funds for your business needs.</div><br><br>
                <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#applyModal-PersonalLoan">Apply Now</a>
                <a href="#" class="btn learn-more" data-bs-toggle="modal" data-bs-target="#learnMoreModal-PersonalLoan">Learn More</a>
            </div>

            <!-- Modal for Apply Now: Personal Loan -->
            <div class="modal fade" id="applyModal-PersonalLoan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Apply for Personal Loan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <h2><p align="center">Real Estate Property<br> Requirements for <br>CONDO UNITS</h2></p>
                                        ------------------------------------------------------------------------
                                        <br><h3>Primary</h3>
                                        <ul>
                                        <li>Owners Copy of Condominium Title.</li>
                                        <li>Latest Certified True Copy of Title at Registry of Deeds</li>
                                        <li>Floor Plan with vicinity map </li>
                                        <li>Latest Certified True Copy of Tax Declaration</li>
                                        </ul><h3>Secondary</h3><ul>
                                        <li>Latest Certified True Copy of Tax Clearance</li>
                                        <li>Source Documents(Deed of Sale)</li>
                                        <li>Proof of Income</li>
                                        <li>Tin Number</li>
                                        </ul>

                                        <label for="myfile">Select a file:</label> <input type="file" id="myfile" name="myfile">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Submit Application</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal for Learn More: Personal Loan -->
            <div class="modal fade" id="learnMoreModal-PersonalLoan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Learn More About Personal Loan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <img src="Loan/image/personal_loan.png" alt="Personal Loan">
                        Bring your plans to life with SFCC Personal Loans. Enjoy low interest rates and easy payment terms on your financing needs.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container2">
        <div class="title2">Featured Properties | Condominiums</div>
        <div class="tabs2">
            <!-- <a href="#" class="tab2 active">Metro Manila</a>
            <a href="#" class="tab2">South Luzon</a>
            <a href="#" class="tab2">VisMin</a> -->
        </div>
        <div class="cards-carousel2">
            <!-- <button class="carousel-button2 prev2" aria-label="Previous">&#10094;</button> -->
            <div class="cards2">
                <div class="card2">
                    <img src="Loan/image/breeze_residences.png" alt="Breeze Residences">
                    <div class="card-content2">
                        <button class="btn" data-bs-toggle="modal" data-bs-target="#breezeModal">
                            <div class="card-title2">Breeze Residences</div> 
                        </button>

                        <!-- Breeze Modal -->
                        <div class="modal fade" id="breezeModal" tabindex="-1" aria-labelledby="breezeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h2><p align="center">Real Estate Property<br> Requirements for <br>CONDO UNITS</h2></p>
                                        <img src="Loan/image/breeze_residencesmodal.png" alt="Salcedo Square">
                                        ------------------------------------------------------------------------
                                        <br><h3>Primary</h3>
                                        <ul>
                                        <li>Owners Copy of Condominium Title.</li>
                                        <li>Latest Certified True Copy of Title at Registry of Deeds</li>
                                        <li>Floor Plan with vicinity map </li>
                                        <li>Latest Certified True Copy of Tax Declaration</li>
                                        </ul><h3>Secondary</h3><ul>
                                        <li>Latest Certified True Copy of Tax Clearance</li>
                                        <li>Source Documents(Deed of Sale)</li>
                                        <li>Proof of Income</li>
                                        <li>Tin Number</li>
                                        </ul>

                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-location2">Pasay City</div>
                        <div class="card-price2">PHP 5,767,401.00</div>
                        <div class="card-details2">Studio, 1 Bath, 23.51 sqm Floor Area</div>
                    </div>
                </div>

                <div class="card2">
                    <img src="Loan/image/coast_residences.png" alt="Coast Residences">
                    <div class="card-content2">
                        <button class="btn" data-bs-toggle="modal" data-bs-target="#coastModal">
                            <div class="card-title2">Coast Residences</div>
                        </button>

                        <!-- Coast Modal -->
                        <div class="modal fade" id="coastModal" tabindex="-1" aria-labelledby="coastModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <h2><p align="center">Real Estate Property<br> Requirements for <br>CONDO UNITS</h2></p>
                                    <img src="Loan/image/coast_residencesmodal.png" alt="Salcedo Square">
                                        ------------------------------------------------------------------------
                                        <br><h3>Primary</h3>
                                        <ul>
                                        <li>Owners Copy of Condominium Title.</li>
                                        <li>Latest Certified True Copy of Title at Registry of Deeds</li>
                                        <li>Floor Plan with vicinity map </li>
                                        <li>Latest Certified True Copy of Tax Declaration</li>
                                        </ul><h3>Secondary</h3><ul>
                                        <li>Latest Certified True Copy of Tax Clearance</li>
                                        <li>Source Documents(Deed of Sale)</li>
                                        <li>Proof of Income</li>
                                        <li>Tin Number</li>
                                        </ul>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-location2">Pasay City</div>
                        <div class="card-price2">PHP 6,002,447.00</div>
                        <div class="card-details2">Studio, 1 Bath, 20.40 sqm Floor Area</div>
                    </div>
                </div>

                <div class="card2">
                    <img src="Loan/image/salcedo_square.png" alt="Salcedo Square">
                    <div class="card-content2">
                        <button class="btn" data-bs-toggle="modal" data-bs-target="#salcedoModal">
                            <div class="card-title2">Salcedo Square</div>
                        </button>

                        <!-- Salcedo Modal -->
                        <div class="modal fade" id="salcedoModal" tabindex="-1" aria-labelledby="salcedoModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <h2><p align="center">Real Estate Property<br> Requirements for <br>CONDO UNITS</h2></p>
                                    <img src="Loan/image/salcedo_squaremodal.png">
                                        ------------------------------------------------------------------------
                                        <br><h3>Primary</h3>
                                        <ul>
                                        <li>Owners Copy of Condominium Title.</li>
                                        <li>Latest Certified True Copy of Title at Registry of Deeds</li>
                                        <li>Floor Plan with vicinity map </li>
                                        <li>Latest Certified True Copy of Tax Declaration</li>
                                        </ul><h3>Secondary</h3><ul>
                                        <li>Latest Certified True Copy of Tax Clearance</li>
                                        <li>Source Documents(Deed of Sale)</li>
                                        <li>Proof of Income</li>
                                        <li>Tin Number</li>
                                        </ul>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-location2">Makati City</div>
                        <div class="card-price2">PHP 6,457,960.00</div>
                        <div class="card-details2">Studio, 1 Bath, 18.27 sqm Floor Area</div>
                    </div>
                </div>
            </div>
            <!-- <button class="carousel-button2 next2" aria-label="Next">&#10095;</button> -->
        </div>
        <div class="disclaimer2">Disclaimer: Availability and price of listed properties are subject to final confirmation of the Developer.</div>
    </div>

    <div class="container3">
        <div class="title3">Popular Cars | Sedan / Hatchback</div>
        <div class="subtitle3">Here are the most searched models</div>
        <div class="carousel3">
            <!-- <button class="carousel-button3 prev3" aria-label="Previous">&#10094;</button> -->
            <div class="cards3">
                <div class="card3">
                    <img src="Loan/image/bmw_318i.png" alt="BMW 318i">
                    <div class="card-content3">
                        <button class="btn" data-bs-toggle="modal" data-bs-target="#bmw318iModal">
                            <div class="card-title2">BMW 318i</div>
                        </button>

                        <!-- BMW 318i Modal -->
                        <div class="modal fade" id="bmw318iModal" tabindex="-1" aria-labelledby="bmw318iModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h2><p align="center">Motor Vehicles Requirements</h2></p>
                                        <img src="Loan/image/bmw_318imodal.png" alt="Salcedo Square">
                                        ------------------------------------------------------------------------
                                        <br><h3>Primary</h3>
                                        <ul>
                                        <li>Photocopies of OR/CR(2 copies)</li>
                                        <li>Clear copy of Stencils of engine</li>
                                        <li>Clear copy of Stencils of chassis </li>
                                        </ul><h3>Secondary</h3><ul>
                                        <li>Pictures of Unit</li>
                                        <li>Proof of Employment/Income</li>
                                        <li>Photocopies of 2 valid government ID</li>
                                        <li>2x2 Colored Pictures</li>
                                        </ul>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-price3">Starts at PHP 3,790,000.00</div>
                        <div class="card-installment3">Pay PHP 63,571 /month</div>
                    </div>
                </div>

                <div class="card3">
                    <img src="Loan/image/bmw_530i.png" alt="BMW 530i">
                    <div class="card-content3">
                        <button class="btn" data-bs-toggle="modal" data-bs-target="#bmw530iModal">
                            <div class="card-title2">BMW 530i</div>
                        </button>

                        <!-- BMW 530i Modal -->
                        <div class="modal fade" id="bmw530iModal" tabindex="-1" aria-labelledby="bmw530iModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h2><p align="center">Motor Vehicles Requirements</h2></p>
                                        <img src="Loan/image/bmw_530imodal.png" alt="BMW 530i">
                                        ------------------------------------------------------------------------
                                        <br><h3>Primary</h3>
                                        <ul>
                                        <li>Photocopies of OR/CR(2 copies)</li>
                                        <li>Clear copy of Stencils of engine</li>
                                        <li>Clear copy of Stencils of chassis </li>
                                        </ul><h3>Secondary</h3><ul>
                                        <li>Pictures of Unit</li>
                                        <li>Proof of Employment/Income</li>
                                        <li>Photocopies of 2 valid government ID</li>
                                        <li>2x2 Colored Pictures</li>
                                        </ul>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-price3">Starts at PHP 4,990,000.00</div>
                        <div class="card-installment3">Pay PHP 83,699 /month</div>
                    </div>
                </div>

                <div class="card3">
                    <img src="Loan/image/byd_dolphin.png" alt="BYD Dolphin">
                    <div class="card-content3">
                        <button class="btn" data-bs-toggle="modal" data-bs-target="#bydDolphinModal">
                            <div class="card-title2">BYD Dolphin</div>
                        </button>

                        <!-- BYD Dolphin Modal -->
                        <div class="modal fade" id="bydDolphinModal" tabindex="-1" aria-labelledby="bydDolphinModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h2><p align="center">Motor Vehicles Requirements</h2></p>
                                        <img src="Loan/image/byd_dolphinmodal.png" alt="BYD Dolphin">
                                        ------------------------------------------------------------------------
                                        <br><h3>Primary</h3>
                                        <ul>
                                        <li>Photocopies of OR/CR(2 copies)</li>
                                        <li>Clear copy of Stencils of engine</li>
                                        <li>Clear copy of Stencils of chassis </li>
                                        </ul><h3>Secondary</h3><ul>
                                        <li>Pictures of Unit</li>
                                        <li>Proof of Employment/Income</li>
                                        <li>Photocopies of 2 valid government ID</li>
                                        <li>2x2 Colored Pictures</li>
                                        </ul>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-price3">Starts at PHP 1,398,000.00</div>
                        <div class="card-installment3">Pay PHP 23,450 /month</div>
                    </div>
                </div>

                <div class="card3">
                    <img src="Loan/image/gac_empow.png" alt="GAC Empow">
                    <div class="card-content3">
                        <button class="btn" data-bs-toggle="modal" data-bs-target="#gacEmpowModal">
                            <div class="card-title2">GAC Empow</div>
                        </button>

                        <!-- GAC Empow Modal -->
                        <div class="modal fade" id="gacEmpowModal" tabindex="-1" aria-labelledby="gacEmpowModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h2><p align="center">Motor Vehicles Requirements</h2></p>
                                        <img src="Loan/image/gac_empowmodal.png" alt="GAC Empow">
                                        ------------------------------------------------------------------------
                                        <br><h3>Primary</h3>
                                        <ul>
                                        <li>Photocopies of OR/CR(2 copies)</li>
                                        <li>Clear copy of Stencils of engine</li>
                                        <li>Clear copy of Stencils of chassis </li>
                                        </ul><h3>Secondary</h3><ul>
                                        <li>Pictures of Unit</li>
                                        <li>Proof of Employment/Income</li>
                                        <li>Photocopies of 2 valid government ID</li>
                                        <li>2x2 Colored Pictures</li>
                                        </ul>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-price3">Starts at PHP 1,348,000.00</div>
                        <div class="card-installment3">Pay PHP 22,611 /month</div>
                    </div>
                </div>
                
            </div>
            <!-- <button class="carousel-button3 next3" aria-label="Next">&#10095;</button> -->
        </div>
        <div class="disclaimer2">Disclaimer: Availability and price of listed Vehicles are subject to final confirmation of the Developer.</div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
            <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-8eR1T5Ypsw
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-8eR1T5Ypsw24E5BBadf1G6S2CJ7PmtA5VZGEXKJhUFBVoQ91gZvhUvbPY5e4lZLr" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-wOaTdsIPrtPhr00h7VX4UocP5e8oAz5D1dJ+rRUmxFYkqxIxjB3pVoBXepT9PpG8" crossorigin="anonymous"></script>

<!-- </body>
</html> -->
