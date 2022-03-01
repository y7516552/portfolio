
let loading = document.querySelector('.loading');
let counties = ['臺北市', '新北市', '基隆市', '宜蘭縣', '桃園市', '新竹縣', '新竹市', '苗栗縣', '臺中市', '彰化縣', '南投縣', '雲林縣', '嘉義縣', '嘉義市', '臺南市', '高雄市', '屏東縣', '花蓮縣', '臺東縣', '連江縣', '金門縣', '澎湖縣']
let containerEle = document.querySelector('.container');
let cardimgEle = document.querySelector('.card-img');
let showbtnEle = document.querySelector('#show-btn');
let returnbtnEle = document.querySelector('#return-btn');
let content = '';
let weatherData = {};
const url = 'https://opendata.cwb.gov.tw/api/v1/rest/datastore/F-C0032-001?Authorization=CWB-ADC0B632-DA20-4845-88AF-CE992F6A969A&format=JSON';

window.onload = function () {
    fetch(url)
        .then(function (response) {
            return response.json();
        })
        .then(function (data) {
            // console.log(data);
            let allInfo = data['records']['location'];
            let area = allInfo.length;
            //
            // let weatherData = {};
            allInfo.forEach(function (location) {
                //以縣市名為KEY  進行初始化
                weatherData[location['locationName']] = {};
                //取出所有天氣因子
                let weatherElements = location['weatherElement'];
                let weatherType = weatherElements[0]['time'][0]['parameter']['parameterValue']
                //利用forEach將各因子取出
                weatherElements.forEach(function (weatherElement) {
                    //將各因子資料存入物件中
                    weatherData[location['locationName']][weatherElement['elementName']] = weatherElement['time'][0]['parameter']['parameterName'];
                    weatherData[location['locationName']][weatherElement['elementName'][1]] = weatherType
                })
            });


            counties.forEach(function (county) {
                let wxValne = weatherData[county]['I'];
                let weatherImg = '';
                let sunnyIcon = '<svg class="sunny" viewbox="15 15 70 70"><animateTransform dur="10s" attributeName="transform" repeatCount="indefinite" type="rotate" from="0,0,0"to="360,0,0" /><rect class="sunny-1" ; width="40" height="40" x="30" y="30" rx="2" ></rect><rect width="40" height="40" x="30" y="30" rx="2"></rect><circle id="sun" cx="50" cy="50" r="20"></circle></svg>';
                let cloudysunIcon = '<svg class="cloudy_sunny" viewbox="0 -5 100 100"><rect width="30" height="30" x="45" y="25" rx="2" rotate="45" ><animateTransform dur="5s" attributeName="transform" repeatCount="indefinite" type="rotate" from="0,60,40"to="360,60,40" /></rect><rect width="30" height="30" x="45" y="25" rx="2"><animateTransform dur="5s" attributeName="transform" repeatCount="indefinite" type="rotate" from="-45,60,40"to="315,60,40" /></rect><circle id="sun" cx="60" cy="40" r="15"></circle><g id="cloud"><circle cx="30" cy="50" r="15"></circle><circle cx="50" cy="50" r="20"></circle><circle cx="70" cy="55" r="15"></circle><circle cx="80" cy="55" r="10"></circle><animateTransform attributeName="transform" type="translate" values="-5,10;10,10;-5,10" dur="7s"repeatCount="indefinite" /></g></svg>';
                let cloudyIcon = '<svg class="cloudy" viewbox="0 0 100 100"><g id="cloud"><circle cx="30" cy="50" r="15"></circle><circle cx="50" cy="50" r="20"></circle><circle cx="70" cy="55" r="15"></circle><circle cx="80" cy="55" r="10"></circle><animateTransform attributeName="transform" type="translate" values="10,0;-5,0;10,0" dur="2s"repeatCount="indefinite" /></g><g id="cloud2"><circle cx="30" cy="50" r="15"></circle><circle cx="50" cy="50" r="20"></circle><circle cx="70" cy="55" r="15"></circle><circle cx="80" cy="55" r="10"></circle><animateTransform attributeName="transform" type="translate" values="-5,20;10,20;-5,20" dur="2s"repeatCount="indefinite" /></g><animateTransform attributeName="transform" dur="0.1s" type="scale" values="1.5"/></svg>';
                let overcastIcon = '<svg class="overcast" viewbox="0 0 100 100"><g id="overcast_cloud"><circle cx="30" cy="50" r="15"></circle><circle cx="50" cy="50" r="20"></circle><circle cx="70" cy="55" r="15"></circle><circle cx="80" cy="55" r="10"></circle><animateTransform attributeName="transform" type="translate" values="10,0;-5,0;10,0" dur="2s"repeatCount="indefinite" /></g><g id="overcast_cloud2"><circle cx="30" cy="50" r="15"></circle><circle cx="50" cy="50" r="20"></circle><circle cx="70" cy="55" r="15"></circle><circle cx="80" cy="55" r="10"></circle><animateTransform attributeName="transform" type="translate" values="-5,20;10,20;-5,20" dur="2s"repeatCount="indefinite" /></g></svg>';
                let rainyIcon = '<svg class="rainy" viewbox="0 10 100 100"><g id="rain"><rect width="2" height="7" x="45" y="60" rx="1"><animateTransform dur="1.5s" attributeName="transform" repeatCount="indefinite" type="rotate"values="30,10,50;30,-150,-20" /></rect><rect width="2" height="7" x="60" y="60" rx="1"><animateTransform dur="1.8s" attributeName="transform" repeatCount="indefinite" type="rotate"values="30,50,50;30,-150,-20" /></rect><rect width="2" height="7" x="75" y="55" rx="1"><animateTransform dur="1.3s" attributeName="transform" repeatCount="indefinite" type="rotate"values="30,50,60;30,-150,-20" /></rect><rect width="2" height="7" x="65" y="45" rx="1"><animateTransform dur="1.2s" attributeName="transform" repeatCount="indefinite" type="rotate"values="30,50,60;30,-150,-20" /></rect><animateTransform link attributeName="transform" type="translate" values="-5,-5;10,0;-5,-5" dur="5s"repeatCount="indefinite" /></g><g id="overcast_cloud"><circle cx="30" cy="50" r="15"></circle><circle cx="50" cy="50" r="20"></circle><circle cx="70" cy="55" r="15"></circle><circle cx="80" cy="55" r="10"></circle><animateTransform attributeName="transform" type="translate" values="10,0;-5,0;10,0" dur="2s"repeatCount="indefinite" /></g><g id="overcast_cloud2"><circle cx="30" cy="50" r="20"></circle><circle cx="50" cy="50" r="25"></circle><circle cx="70" cy="55" r="20"></circle><circle cx="80" cy="55" r="15"></circle><animateTransform attributeName="transform" type="translate" values="-5,15;5,15;-5,15" dur="2s"repeatCount="indefinite" /></g></svg>';
                let thunderIcon = '<svg class="rainy_thunder" viewbox="0 10 100 100"><g id="rain"><rect width="2" height="7" x="45" y="60" rx="1"><animateTransform dur="0.6s" attributeName="transform" repeatCount="indefinite" type="rotate"values="30,10,50;30,-150,-20" /></rect><rect width="2" height="7" x="60" y="60" rx="1"><animateTransform dur="0.8s" attributeName="transform" repeatCount="indefinite" type="rotate"values="30,50,50;30,-150,-20" /></rect><rect width="2" height="7" x="75" y="55" rx="1"><animateTransform dur="0.7s" attributeName="transform" repeatCount="indefinite" type="rotate"values="30,50,60;30,-150,-20" /></rect><rect width="2" height="7" x="65" y="45" rx="1"><animateTransform dur="0.5s" attributeName="transform" repeatCount="indefinite" type="rotate"values="30,50,60;30,-150,-20" /></rect><animateTransform link attributeName="transform" type="translate" values="-5,-5;10,0;-5,-5" dur="2s"repeatCount="indefinite" /></g><g><polyline id="thunder" points="50,38 46,50 52,50 50,60 56,47 50,47 50,38"><animateTransform dur="2.5s" attributeName="transform" repeatCount="indefinite" type="rotate"values="30,50,60;30,-150,-20" /></polyline><polyline id="thunder" points="50,38 46,50 52,50 50,60 56,47 50,47 50,38"><animateTransform dur="3s" attributeName="transform" repeatCount="indefinite" type="rotate"values="10,60,100;-100,200,10" /></polyline></g><g id="overcast_cloud"><circle cx="30" cy="50" r="15"></circle><circle cx="50" cy="50" r="20"></circle><circle cx="70" cy="55" r="15"></circle><circle cx="80" cy="55" r="10"></circle><animateTransform attributeName="transform" type="translate" values="10,0;-5,0;10,0" dur="2s"repeatCount="indefinite" /></g><g id="overcast_cloud2"><circle cx="30" cy="50" r="20"></circle><circle cx="50" cy="50" r="25"></circle><circle cx="70" cy="55" r="20"></circle><circle cx="80" cy="55" r="15"></circle><animateTransform attributeName="transform" type="translate" values="-5,15;5,15;-5,15" dur="2s"repeatCount="indefinite" /></g></svg>';
                //判斷wxValne的值
                if (wxValne == 1) {
                    weatherImg = sunnyIcon;
                } else if (wxValne <= 3) {
                    weatherImg = cloudysunIcon;
                } else if (wxValne <= 5) {
                    weatherImg = cloudyIcon;
                } else if (wxValne <= 7) {
                    weatherImg = overcastIcon;
                } else if (wxValne <= 13) {
                    weatherImg = rainyIcon;
                } else if (wxValne <= 13) {
                    weatherImg = thunderIcon;
                }
                content += `<div class="box">
                                <div class="card active " data-tag="${county}" data-tilt  data-tilt-scale="1.1">
                                    <div class="card-img"> ${weatherImg}</div>
                                        <div class="card-info">
                                            <h3>${county}</h3>
                                            <h4>${weatherData[county]['Wx']}</h4>
                                            <h4>降雨機率:<span>${weatherData[county]['PoP']}</span>%</h4>
                                            <h4>溫度:<span>${weatherData[county]['MinT']}</span>°C-<span>${weatherData[county]['MaxT']}</span>°C</h4>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>`;
                containerEle.innerHTML = content;

            });

            VanillaTilt.init(document.querySelector(".card"), {
                max: 25,
                speed: 700
            });
            VanillaTilt.init(document.querySelectorAll(".card"));
        })

    let cityEles = document.querySelectorAll('.city');
    let cardEles = document.querySelectorAll('.card');
    cityEles.forEach(function (cityEle, index) {
        cityEle.addEventListener('mouseenter', function () {
            reset();
            let cityName = this.getAttribute('data-name');
            document.querySelector(`[data-tag="${cityName}"]`).classList.add('active')
        })
    })
    loading.classList.add('none')
}

function reset() {
    if (document.querySelector('.card.active')) {
        document.querySelectorAll('.card.active').forEach(function (e) {
            e.classList.remove('active')
        })

    }
}

function allInfo() {
    let cardEles = document.querySelectorAll('.card');
    cardEles.forEach(function (e) {
        e.classList.add('active')
    })
}

function show(area) {
    reset()
    document.querySelectorAll(`[data-area="${area}"]`).forEach(function (e) {
        let cityName = e.getAttribute('data-name');
        if (document.querySelector(`[data-tag="${cityName}"]`)) {

            console.log(document.querySelector(`[data-tag="${cityName}"]`));
            document.querySelector(`[data-tag="${cityName}"]`).classList.add('active');
        }
    })
}

