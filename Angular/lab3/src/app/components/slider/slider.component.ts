import { Component } from '@angular/core';

@Component({
  selector: 'app-slider',
  templateUrl: './slider.component.html',
  styleUrls: ['./slider.component.css']
})
export class SliderComponent {
  interval:any;
  currentSlid=0;
  slide1 ="assets/Images/1.jpg";
  slide2 ="assets/Images/2.jpg";
  slide3 ="assets/Images/3.jpg";
  slides=[this.slide1,this.slide2,this.slide3]
  next(){
    if (this.currentSlid < this.slides.length - 1) {
      this.currentSlid++;
    } else {

    }
  }
  prev(){
    if (this.currentSlid > 0) {
      this.currentSlid--;
    } else {
    
    }
  }
  startSlide() {
   this.interval= setInterval(() => {
      this.next();
      if(this.currentSlid === this.slides.length - 1)
      {
        this.currentSlid=0;
      }
    }, 1000);
  }
  stopSlide() {
    clearInterval(this.interval);
  }
}
