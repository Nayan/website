<!doctype html>
<html lang="en">
    <?php
        // Define variables for SEO
        $pageTitle = 'Finflux | Banking Made Easy';
        $pageDescription = "Finflux is the 'one box' digital financial solution for all the needs of banks and financial institutions.";
        $pageCanonical = '/';
        // We don't want the search engines to see our website just yet
        // $pageRobots = 'all';
         
        // Include header file
        include('./common/header.php');
    ?>
    <body class=" ">
        <a id="start"></a>
        <?php include("./common/navbar.php"); ?>
        <div class="main-container">
        <!-- Your page content starts here -->

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
                            <article>
                                <div class="article__title text-center">
                                    <h1 class="h2">Security &amp; Compliance</h1>
                                    <span>last updated June 26th 2019</span>
                                    
                                </div>
                                <!--end article title-->
                                <div class="article__body">
                                    <p>Conflux’s SaaS banking platform lives up to the high banking security standards and is compliant with common industry requirements, verified and assured by an external certification body.
                                    <br><br>    
                                    1. Reporting Security Issues<br> 
                                    To report any security issues, please contact us at security@finflux.co and encrypt your email with a Public GPG key. Our security team will respond as quickly as possible. We kindly ask you to not publicly disclose any security issue until it has been addressed by Conflux.
                                    <br><br>
                                    2. Built Upon Secure Infrastructure<br> 
                                    Customer data is processed in state of the art data centers of AWS, assured by a vast amount of related certifications, providing confidence to run regulated workloads. Finflux provides several security capabilities and services to increase privacy and control network access. These include:<br> 
                                    2.1 Network firewalls built into Amazon VPC, and web application firewall capabilities in AWS WAF let you create private networks, and control access to your instances and applications (subjected to the additional cost).<br> 
                                    2.2 Encryption in transit with TLS across all services<br> 
                                    2.3 Connectivity options that enable private, or dedicated, connections from your office or on-premises environment
                                    <br><br>
                                    3. Data Encryption<br> 
                                    Finflux offers you the ability to add an additional layer of security to your data at rest in the cloud, providing scalable and efficient encryption features. This includes, data encryption of sensitive using industry standard practice. Finflux  uses Key management system to store all the keys, passwords, access token securely.
                                    <br><br>
                                    4. Identity and Access Control<br> 
                                    Finflux offers you capabilities to define, enforce, and manage user access policies across Finflux services. This includes:<br> 
                                    4.1 Role and permission: lets you define individual user accounts with permissions across AWS resources<br> 
                                    4.2 Data scoping: At each user account level , system lets you define the data scope that can be accessed by the account user.<br> 
                                    4.3 Finflux Multi-Factor Authentication for accounts, that enables additional layer of authentication.<br> 
                                    4.4 Device based service access control
                                    <br><br>
                                    5. Complete Audit Rights<br> 
                                    Conflux ensures customers and regulators can execute their supervisory function and have effective audit rights to Conflux’s business premises, processes and supply chain.
                                    <br><br>
                                    6. Isolation &amp; Control<br> 
                                    Customers can choose to have a dedicated Finflux deployment that is not shared with other Finflux customers, giving further control over the environment and increase the isolation required by financial regulators (subjected to the additional cost).
                                    <br><br>
                                    7. SLAs and Business Continuity<br> 
                                    Conflux offers SLAs for uptime and resolution times on customer inquiries. Our disaster recovery procedures and business continuity plans are regularly tested. The Finflux SaaS solution is cloud-agnostic and has no vendor lock-in for any specific cloud vendor.
                                    <br><br>
                                    8. Open Platform<br> 
                                    The Finflux platform provides APIs allowing financial institutions to give third party vendors access to end customer data.
                                    <br><br>
                                    9. Security Built-In<br> 
                                    Security is embedded in all stages of the software development lifecycle (SDLC) at Finflux–from requirements engineering, programming, QA to deployment, monitoring, alerting and incident management.
                                    <br><br>
                                    10. External Penetration Tests<br> 
                                    Finflux performs continuous internal security tests. These tests are further backed by external penetration tests from security researchers–multiple times per year. Penetration tests cover network security aspects as well as common web application vulnerabilities as referenced in the OWASP Top 10 project.
                                    <br><br>
                                    11. Data Leakage &amp; Loss Prevention<br> 
                                    Finflux applies principles like security-in-depth, need-to-know and least- privilege to reduce the chance of data leakage or loss by internal or external threats using different preventive, detective and mitigative controls.
                                    </p>
                                </div>
                            </article>
                            <!--end item-->
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>


        <!-- Your page content ends here -->
        <?php include("./common/footer.php"); ?>
        </div>
        <!--<div class="loader"></div>-->
        <a class="back-to-top inner-link" href="#start" data-scroll-class="100vh:active">
            <i class="stack-interface stack-up-open-big"></i>
        </a>
        <?php include("./common/script.php"); ?>
    </body>
</html>