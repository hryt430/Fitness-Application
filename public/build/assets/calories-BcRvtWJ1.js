document.addEventListener("DOMContentLoaded",()=>{const t=document.getElementById("calories-calculator");if(!t)return;t.innerHTML=`
        <div class="calculator">
            <h1>Calorie Calculator</h1>
            <div class="input-group">
                <label for="carbs">Carbs (g):</label>
                <input type="number" id="carbs" class="input" placeholder="Enter carbs">
            </div>
            <div class="input-group">
                <label for="fats">Fats (g):</label>
                <input type="number" id="fats" class="input" placeholder="Enter fats">
            </div>
            <div class="input-group">
                <label for="protein">Protein (g):</label>
                <input type="number" id="protein" class="input" placeholder="Enter protein">
            </div>
            <button id="calculate" class="btn">Calculate</button>
            <div id="result" class="result"></div>
        </div>
    `;const e=document.getElementById("calculate"),a=document.getElementById("carbs"),l=document.getElementById("fats"),n=document.getElementById("protein"),s=document.getElementById("result");e&&a&&l&&n&&s&&e.addEventListener("click",()=>{const o=parseFloat(a.value)||0,c=parseFloat(l.value)||0,r=parseFloat(n.value)||0,u=o*4+c*9+r*4;s.textContent=`Total Calories: ${u}`})});
