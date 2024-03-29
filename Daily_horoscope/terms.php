<!DOCTYPE html>
<html lang="en">
<?php require('vars.php'); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $appName ?></title>
    <link rel="shortcut icon" href="../img/icons/icon.png" type="image/png">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="mainblock" id="mainblock">
    <header class="header">
            <div class="container">
                <div class="header__inner">
                    <a href="https://molitaderus.com" class="header__link">
                        <img class="header__img" src="../img/icons/icon.png" alt="icon">
                        Applications from a duck
                    </a>
                    <nav class="header__menu">
                        <ul class="header__menu-list">
                            <li class="header__menu-item"><a href="https://molitaderus.com/Daily_horoscope/" class="header__menu-link">Home</a></li>
                            <li class="header__menu-item"><a href="https://molitaderus.com/Daily_horoscope/PrivacyPolicy.php" class="header__menu-link">Privacy Policy</a></li>
                            <li class="header__menu-item"><a href="https://molitaderus.com/Daily_horoscope/terms.php" class="header__menu-link">Terms of Use</a></li>
                        </ul>
                    </nav>
                    <div class="header__burger">
                        <span></span>
                      </div>
                </div>
            </div>
        </header>
        <div class="container">
            <section class="mainblock__content">
                <div class="mainblock__media">
                    <img class="mainblock__image" src="./images/app-icon.png" alt="image">
                </div>
                <div class="mainblock__textbox">
                    <p class="mainblock__text">
                        <?php echo $appName ?>
                    </p>
                    <div class="mainblock__content-links">
                        <a href="https://play.google.com/store/apps/details?id=<?php echo $bundle ?>&hl=en" target="_blank" class="mainblock__content-link">Download</a>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <section class="terms">
        <div class="container">
            <div class="terms__header-block header-block">
                <h2 class="header-block__title">Terms of use</h2>
            </div>
            <div class="terms__textbox">
                <p class="terms__updated">Last updated:
                    <?php echo $data ?>
                </p>
                <h3>1. PREAMBLE</h4>
                <p>1.1. Dear User, We welcome you at our Application (or App), owned by Anatolii Frak, registered in Ukraine, Mira
                    street 450, smt Krasnokutsk, Kharkiv region, 62002. We underline that your use of this App is regulated by these
                    Terms and Conditions (or Terms and Conditions). Please read these Terms and Conditions carefully as they affect
                    your rights and liabilities under the law.</p>
                <p>1.2. By accepting our Terms and Conditions you ensure that you comply with them and agree to follow all our rules
                    and recommendations. If you do not agree to these Terms and Conditions, please do not use the App.</p>
                <p>1.3. If you are a person under the age of 16 years, please, do not use our App.</p>
                <p>1.4. We hope and believe the use of our App will bring you as much joy as possible and you will have a great
                    time! From our side, we want to make sure your use of App as well as our App will fit the legal frames and will
                    be ultimately secure.</p>
                <h3>2. Our App description and usage</h3>
                <p>2.1. Our App is a tool, we decided to collect all the most important features in one convenient everyday
                    predictions and advices from the starts app. Find our everything to any zodiac sign - Taurus, Gemini, Virgo,
                    Cancer, Scorpio, Sagittarius, Libra, Leo, Capricorn, Pisces, Aries, Aquarius.</p>
                <p>2.2. All intellectual property rights to the App, any phase or part of it, which may constitute an independent
                    object of intellectual property rights, belong to us, any and all rights in the content covered by it are
                    protected by applicable law, and nothing in these Terms and Conditions implies that we provide or grants you any
                    of such rights. In order to use the App, you are granted a limited, non-exclusive, non-transferable,
                    non-sublicensable license to access the App and use it for your private and non-commercial use.
                    Except as expressly referred to herein, nothing in this Terms and Conditions is meant to furnish you any rights
                    to any of our’ trademarks, carrier marks, copyrights, patents or change secrets
                    We may revoke your license whenever without a notice.</p>
                ..
                <p>2.3. You are forbidden to alter, modify, manipulate or create by-product works of the App or any of our graphics,
                    innovative or different materials owned by, or licensed to us in any way..
                    You agree that we can also use any suggestions, feedback or guidelines you grant to us without any compensation
                    any obtaining any additional permit or agreement from You .
                    All the rights no longer expressly granted according to these Terms and Conditions are reserved by means of us.
                    To provide You the opportunity to use and enjoy all the functionality, the App can ask you for an access to the
                    following functions of your device:</p>
                <p>2.3.1. android.permission.CHANGE_NETWORK_STATE</p>
                Allows application to change network connectivity state;</p>
            
                <p>2.3.2. android.permission.INTERNET</p>
                Allows applications to open network sockets;</p>
            
                <p>2.3.3. com.android.vending.BILLING</p>
                Allows application to use IN - App Purchase;</p>
            
                <p>2.3.4. android.permission.WAKE_LOCK</p>
                Allows the app to prevent the phone from going to sleep;</p>
            
                <p>2.3.5. android.permission.ACCESS_COARSE_LOCATION</p>
                Allows an app to access approximate location;</p>
            
                <p>2.3.6. com.google.android.c2dm.permission.RECEIVE</p>
                Grants permission to our app to register and receive messages from Google Cloud Messaging;</p>
            
                <p>2.3.7. android.permission.ACCESS_NETWORK_STATE</p>
                Allows applications to access information about networks;</p>
            
                <p>2.3.8. com.google.android.finsky.permission.BIND_GET_INSTALL_REFERRER_SERVICE</p>
                Allows other apps to tell if their installation was launched from an ad in Privacy Browser Free;</p>
            
                <p>2.3.9. android.permission.ACCESS_FINE_LOCATION</p>
                Allows an app to access precise location.</p>
                <p>2.4. If you want to find the App and use it, please go to Google Play® and download it there. To find out more
                    Google Play®, please, visit and read Google Play Terms and Conditions of Service.</p>
            
                <h3>3. Changes to the Terms and Conditions and to the App</h3>
                <p>3.1. We reserve the right to amend, change and modify these Terms and Conditions at any time at our sole
                    discretion. We will try to inform you about such amendments in the App but we also hope that you will be
                    attentive and will revise these Terms and Conditions from time to time not to miss some important data that can
                    influence you. The latest version of these Terms and Conditions will be placed in the App. If you do not stop
                    using our App after the latest changes of the Terms and Conditions appear, we understand that you have reviewed
                    them and accepted the provisions thereof. If you are not sure that you agree with the changes to the Terms and
                    Conditions, do not use the App.</p>
            
                <p>3.1.1. These Terms and Conditions apply to all visitors, users and others who access and use the App ("Users").
                </p>
                <p>3.1.2. We reserve the right to amend, change and modify our Appat any time at our sole discretion. Over time some
                    features of the App may need improvement, some of them become invalid and require deletion, so we notify you
                    that the App may not always be the same as you saw it when you downloaded it. This does not mean that it will
                    get worse, on the contrary, we are trying to make sure that each update makes it more convenient and modern,
                    while excluding and disclaiming any responsibility for how these changes may affect you. If you are not sure
                    that you agree with the changes to the App, do not use it.</p>
                <h3>4. Privacy Policy</h3>
                <p>4.1. We strongly recommend you to examine our <a href="https://molitaderus.com/Daily_horoscope/PrivacyPolicy.php" target="_blank">Privacy Policy</a> that can provide you with the understanding of how
                    we collect and use your personal data.</p>
                <h3>5. Payment Conditions</h3>
                <p>5.1. App offers you different options on how to use it, but be informed that the free of charge version is a
                    version to test if such an App fits you globally. To obtain full scope of functions you need to choose from the
                    types of Subscriptions we offer. A description of features associated with Subscriptions is available via the
                    App. </p>
                    <p>5.2. When you purchase a Subscription, you make a financial transaction, so you can use your credit card and
                        your address(es) for billing and delivery (such information, “Payment Information”). You represent and
                        warrant that you have the legal right to use all payment method(s) represented by any such Payment
                        Information. The amounts due and payable by you for a Transaction through the App will be presented to you
                        before you place your order. If you choose to initiate a Transaction via the App, you authorize us to
                        provide your Payment Information to third party service providers so we can complete your Transaction. We
                        also reserve the right, in our sole discretion, to take steps to verify your identity. </p>
                        <p>5.3. By purchasing a Subscription you agree to pay the applicable fees and any taxes and additional fees
                            that can appear. We can not consult you about such possible fees or taxes so if you are not sure about
                            them, please ask for advice from the professional in this sphere in your place of residence as the rules
                            can differ according to the location.</p>
                            <p>5.4. All payments made are non-refundable and non-transferable.</p>
                                <p>5.5. After the Subscription purchasing, the User becomes a Subscriber of our App and receives
                                    additional options and settings on the Application, such as:</p>
                                    <p> - No ads;</p>
                                    <p> - Full access to all content</p>
                                    <p> - VIP support.</p>
                                    <p>5.6. The list of above-mentioned options may be updated, changed or amended from time to time
                                        by us.</p>
                                    <p>6. Prohibitions
                                </h3>
                                <p>6.1. You are expressly prohibited from using any means, devices or arrangements to commit fraud,
                                    violate any applicable law, falsify information in connection with the App or exceed your
                                    permitted access to the App.
                                    We have the right to block your access to the App and to take all necessary legal actions to
                                    restore the damage caused by these violations or any other violations of any laws, rules and
                                    regulations. In any case, we shall make all determinations about fraudulent activity in our sole
                                    discretion.</p>
                                <h3>7. Advertisers, Third-Party Websites And Content</h3>
                                <p>7.1. The Application may contain (or you may be sent via the Application) links to other websites
                                    or applications (“Third-Party Websites”, “Third-Party Apps”) and may contain articles,
                                    photographs, text, graphics, pictures, designs, music, sound, video, information, applications,
                                    software, resources and other content or items belonging to or originating from third parties
                                    (“Third-Party Content”). We provide these links only for your convenience and are not
                                    responsible for the Third-Party Websites, Apps, Content, products or services available from
                                    those websites or resources or links displayed on such websites. You acknowledge sole
                                    responsibility for and assume all risks arising from your use of any third-party websites or
                                    resources.</p>
                                <p>7.2. By using Third-Party Websites, you acknowledge and agree that we do not control such
                                    Third-Party Websites and Third-Party Content. When you leave the App and follow any links,
                                    websites, content etc., you do it at your sole risk. We highly recommend you to review and
                                    familiarize yourself with the Terms and Conditions and Privacy Policies of all Third-Party
                                    Websites prior to using them. The personal information you choose to give to such third parties
                                    is not covered by our Privacy Policy rules and you agree and understand that you provide such
                                    personal data at your sole sisk.</p>
                                <p>7.3. You agree and acknowledge that we do not endorse the products or services offered on
                                    Third-Party Websites and you shall hold us harmless from any harm caused by your purchase of
                                    such products or services. Additionally, you shall hold us harmless from any losses sustained by
                                    you or harm caused to you relating to or resulting in any way from any Third-Party Content or
                                    any contact with Third-Party Websites.</p>
                                <p>7.4. The functioning of the Application is designed so that we engage various Ad Partners' whose
                                    advertising you may receive when using the Application. As for us, we inform you that all
                                    advertisements sent in connection with the use of the Application must contain an appropriate
                                    link to opt out of receiving them. At the same time, we declare that we are not the direct
                                    senders of such ads and cannot guarantee the possibility of opting out of them. Therefore, the
                                    responsibility for the compliance of advertising with legal requirements lies solely on the Ad
                                    Partners' as a third party. Advertising Partners agree not to rely on our approval of their
                                    advertising for compliance with the applicable law and not to make any claim that such
                                    advertising partner complies with the applicable based on our approval.</p>
                                <p>7.5. We may allow the Advertisers to display their advertisements and other information (Adv.
                                    content) in certain areas of the Application, such as sidebar advertisements, banner
                                    advertisements or widget advertisement - Internal advertisement. We simply provide the virtual
                                    space for the Advertisers to place such advertisements, and we have no other relationship with
                                    Advertisers. We expressly disclaim any warranties or other representations regarding the
                                    Advertiser`s Adv. content. Please note if the Adv. content contains links to other websites and
                                    resources (also provided by Advertisers or the third parties), these links are provided without
                                    our control. We do not control the content of these sites or resources and are not responsible
                                    for them or for any loss or damage that may result from your use of them. If you use such links,
                                    you do so entirely at your own risk and subject to the Terms and Conditions, Privacy Policies of
                                    such Advertisers or other third parties. For example, we may use AppLovin marketing and
                                    advertising network. AppLovin provides software solutions for mobile app publishers to automate
                                    and optimize the marketing and monetization of their apps. For more details, please visit and
                                    read AppLovin Terms of Use and Privacy Policy.</p>
                                <p>7.6. Internal advertisements are generated and published by advertising networks, e.g. AdMob.</p>
                                <h3>8. Termination</h3>
                                <p>8.1. Each party has the right to cease being bound by these TTerms and Conditions. If you no
                                    longer want to use the Application, you can stop using it, delete it from your your device and
                                    that will automatically waive the obligations of the Terms and Conditions, except for those that
                                    remain valid even after the Application is deleted from your device, including the provisions of
                                    ownership, disclaimer of warranties, limitations and provisions on dispute resolution.
                                    We can terminate these Terms and Conditions at any time for any reason and without it at our
                                    sole discretion.</p>
                                <h3>9. Indemnity</h3>
                                <p>9.1. You agree to indemnify and hold Us harmless from and against any claims, disputes, demands,
                                    liabilities, damages, losses, and costs and expenses, including, without limitation, reasonable
                                    legal and accounting fees, arising out of or in any way connected with your access to or use of
                                    the App or Content from it or your violation of these Terms and Conditions.</p>
                                <h3>10. Disclaimers and Limitation of Liability</h3>
                                <p>10.1. IN NO EVENT WE WILL BE LIABLE FOR ANY DAMAGES OF ANY KIND ARISING FROM YOUR USE OF THE APP.
                                    THE INFORMATION, CONTENT, AND SERVICES AT THE APP ARE PROVIDED ON AN “AS IS” BASIS WITH NO
                                    WARRANTY. YOU USE THE APP AT YOUR OWN RISK. TO THE MAXIMUM EXTENT PERMITTED BY LAW, WE DISCLAIM
                                    ALL REPRESENTATIONS AND WARRANTIES OF ANY KIND, EXPRESS OR IMPLIED, WITH RESPECT TO THE
                                    OPERATION OF APP, THE INFORMATION, SERVICES, AND CONTENT INCLUDED AT THE APP, INCLUDING BUT NOT
                                    LIMITED TO THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE. WE DO
                                    NOT REPRESENT OR WARRANT THAT THE INFORMATION IN THE APP OR PROVIDED BY APP IS ACCURATE,
                                    COMPLETE OR CURRENT.</p>
                                <p>10.2. IN NO EVENT WE WILL BE LIABLE FOR ANY UNAVAILABILITY OR INOPERABILITY OF THE APPLICATION,
                                    ITS FUNCTIONS, LINKS, PROGRAM WEB SITES, TECHNICAL MALFUNCTION, COMPUTER ERROR, CORRUPTION OR
                                    LOSS OF INFORMATION OR OTHER INJURY, DAMAGE OR DISRUPTION OF ANY KIND BEYOND THE REASONABLE OF
                                    OUR CONTROL.</p>
                                <p>10.3. OUR CUMULATIVE LIABILITY, FROM ALL CAUSES OF ACTION AND ALL THEORIES OF LIABILITY, WILL BE
                                    LIMITED TO AND WILL NOT EXCEED THE AMOUNTS PAID BY YOU TO US FOR SUBSCRIPTION DURING THE SIX (6)
                                    MONTHS IMMEDIATELY PRIOR TO SUCH CLAIM.</p>
                                <h3>11. Governing Law And Dispute Resolution</h3>
                                <p>11.1. These Terms and Conditions and your use of the Application are governed by and construed in
                                    accordance with the laws of the Ukraine. Any dispute arising out of or in connection with these
                                    Terms and Conditions, including any question regarding its existence, validity or termination,
                                    shall be referred to and finally resolved by the courts of the Ukraine.</p>
                                <h3>12. Contact Information</h3>
                                <p>12.1. If you want to resolve any question or request you have regarding our App, please contact
                                    us at <a href="mailto:<?php echo $gmail ?>"><?php echo $gmail ?></a>.</p>
            </div>
        </div>
    </section>
    <footer class="footer" id="footer">
        <div class="container">
            <h3 class="footer__title">Contact Us</h3>
            <span class="footer__mail">
                Email: 
                <a class="footer__mail-lnk" href="mailto:<?php echo $gmail ?>"><?php echo $gmail ?></a>
            </span>
            <span class="footer__rights">All Rights Reserved</span>
        </div>
    </footer>
    <script src="../js/script.js"></script>
</body>
</html>