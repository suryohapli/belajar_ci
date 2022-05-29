<?=$this->extend('layout/template')?>

<?=$this->section('isi')?>

<div class="contact-content font1 max-width-1 m-auto">
        <div class="max-width-1 m-auto mx-1">
            <h2>Feel Free to Contact Us</h2>
            <div class="contact-form">
                <div class="form-box">
                    <input type="text" placeholder="Enter Your Name">
                </div>
                <div class="form-box">
                    <input type="text" placeholder="Enter Your Phone Number">
                </div>
                <div class="form-box">
                    <input type="text" placeholder="Enter Your Email Id">
                </div>
                <div class="form-box">
                    <textarea name="" id="" cols="30" rows="10" placeholder="How may we help you?"></textarea>
                </div>
                <div class="form-box">
                    <button class="btn">Submit</button>
                </div>

            </div>
        </div>


<?=$this->endSection()?>