<style>
* {
  margin: 0;
  padding: 0;
}

html,
body {
  box-sizing: border-box;
  height: 100%;
  width: 100%;
}

body {
  background: #FFF;
  font-family: 'Noto Sans JP', sans-serif;
  font-weight: 400;
}

.buttons {
  display: flex;
  flex-direction: row;
      flex-wrap: wrap;
  justify-content: center;
  text-align: center;
  width: 100%;
  height: 100%;
  margin: 0 auto;
}

.container {
  align-items: center;
  display: flex;
  flex-direction: column;
  justify-content: center;
  text-align: center;
  background-color: #FFF;
  padding:  40px 0px;
  width: 240px;
}

h1 {
  text-align: left;
  color: #444;
  letter-spacing: 0.05em;
  margin: 0 0 0.4em;
  font-size: 1em;
}

p {
  text-align: left;
  color: #444;
  letter-spacing: 0.05em;
  font-size: 0.8em;
  margin: 0 0 2em;
}


.btn {
  letter-spacing: 0.1em;
  cursor: pointer;
  font-size: 14px;
  font-weight: 400;
  line-height: 45px;
  max-width: 160px;
  position: relative;
  text-decoration: none;
  text-transform: uppercase;
  width: 100%;
}
.btn:hover {
  text-decoration: none;
}

.effect04 {
  --uismLinkDisplay: var(--smLinkDisplay, inline-flex);
  display: var(--uismLinkDisplay);
  color: #000;
  outline: solid  2px #000;
  position: relative;
  transition-duration: 0.4s;
  overflow: hidden;
}

.effect04::before,
.effect04 span{
    margin: 0 auto;
	transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
	transition-duration: 0.4s;
}

.effect04:hover{

  background-color: #000;
}

.effect04:hover span{
  -webkit-transform: translateY(-400%) scale(-0.1,20);
          transform: translateY(-400%) scale(-0.1,20);
}

.effect04::before{
  content: attr(data-sm-link-text);
	color: #FFF;
  position: absolute;
  left: 0;
  right: 0;
  margin: auto;
  -webkit-transform: translateY(500%) scale(-0.1,20);
          transform: translateY(500%) scale(-0.1,20);
}

.effect04:hover::before{
  letter-spacing: 0.05em;
  -webkit-transform: translateY(0) scale(1,1);
          transform: translateY(0) scale(1,1);
}

</style>

<html>
<div class="buttons">
  <div class="container">
      <a href="https://twitter.com/masuwa1018" class="btn effect04" data-sm-link-text="reserve a seat!" target="_blank"><span>Book a Seat</span></a>
  </div>
</div>

</html>