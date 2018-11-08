class Banner {
    constructor() {
        this.events();
    }
    events(){
        var delay_popup = 1000;
	setTimeout("document.getElementById('overlay').style.display='block'", delay_popup);
    }
}

export default Banner;