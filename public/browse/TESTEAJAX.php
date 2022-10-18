<!DOCTYPE html>
<html>
    <head>
    <style>
.race-by {
  --uib-size: 80px;
  --uib-speed: 1.4s;
  --uib-color: black;
  --uib-line-weight: 5px;

  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  height: var(--uib-line-weight);
  width: var(--uib-size);
  border-radius: calc(var(--uib-line-weight) / 2);
  overflow: hidden;
  transform: translate3d(0, 0, 0);
}

.race-by::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: var(--uib-color);
  opacity: 0.1;
}

.race-by::after {
  content: '';
  height: 100%;
  width: 100%;
  border-radius: calc(var(--uib-line-weight) / 2);
  animation: raceBy var(--uib-speed) ease-in-out infinite;
  transform: translateX(-100%);
  background-color: var(--uib-color);
}

@keyframes raceBy {
  0% {
    transform: translateX(-100%);
  }
  100% {
    transform: translateX(100%);
  }
}
        </style>

   
    </head>

    <body>
    <div class="race-by"></div>



    
    </body>