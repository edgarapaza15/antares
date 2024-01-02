//AJAX
let modo = "";
let gallitoColumna, jequetepequeColumna, talambozanaColumna, valvulasColumna;
graficoAntares(modo);
$("#graficos-por-mes").addClass("sin-estilo");
$("#graficos-por-mes").hide();
$("#mainHoras").hide();

//Filtro Button
$("#btn-filtrar").click(function () {
  let modoValor = $("#modo").val();
  //console.log(modoValor);
  if (modoValor == "dia") {
    let modo = modoValor;
    graficoAntares(modo,gallitoColumna,jequetepequeColumna,talambozanaColumna,valvulasColumna);
    $("#main").show();
  } else if (modoValor == "mes") {
    let modo = modoValor;
    $("#btn-mes").show();
    $("#fecha-mes").show();
    graficoAntares(modo,gallitoColumna,jequetepequeColumna,talambozanaColumna,valvulasColumna);
    $("#main").show();
    //al presionar el boton
    $("#btn-mes").click(function () {
      let mes = $("#fecha-mes").val();
      //$("#main").hide();
      $("#graficos-por-mes").removeClass("sin-estilo");
      $("#graficos-por-mes").show();
      graficoAntaresMeses(mes,gallitoColumna,jequetepequeColumna,talambozanaColumna,valvulasColumna);
    });
  } else if (modoValor == "hora") {
    $("#mainHoras").show();
    $("#btn-hora").show();
    $("#fecha").show();
    //$("#main").hide();
    // $("#btn-filtrar").hide();
    // $('#btn-filtrar').addClass("style-none");
    let fecha = "";
    graficoAntaresHoras(fecha,gallitoColumna,jequetepequeColumna,talambozanaColumna,valvulasColumna);
    $("#btn-hora").click(function () {
      $("#mainHoras").show();
      let fecha = $("#fecha").val();
      //$("#main").hide();
      graficoAntaresHoras(fecha,gallitoColumna,jequetepequeColumna,talambozanaColumna,valvulasColumna);
      //console.log(modo);
    });
  }
});
//cuando elija las columnas y presione el boton
$("#filtrar-columnas").click(function () {
  let gallitoColumna = $("#gallitoColumna").val();
  let jequetepequeColumna = $("#jequetepequeColumna").val();
  let talambozanaColumna = $("#talambozanaColumna").val();
  let valvulasColumna = $("#valvulasColumna").val();
  //console.log(gallitoColumna+" "+jequetepequeColumna+" "+talambozanaColumna+" "+valvulasColumna)
  graficoAntares(modo,gallitoColumna,jequetepequeColumna,talambozanaColumna,valvulasColumna);
  //Filtro Button
  $("#btn-filtrar").click(function () {
    let modoValor = $("#modo").val();
    //console.log(modoValor);
    if (modoValor == "dia") {
      let modo = modoValor;
      graficoAntares(modo,gallitoColumna,jequetepequeColumna,talambozanaColumna,valvulasColumna);
      $("#main").show();
    } else if (modoValor == "mes") {
      let modo = modoValor;
      $("#btn-mes").show();
      $("#fecha-mes").show();
      graficoAntares(modo,gallitoColumna,jequetepequeColumna,talambozanaColumna,valvulasColumna);
      $("#main").show();
      //al presionar el boton
      $("#btn-mes").click(function () {
        let mes = $("#fecha-mes").val();
        //$("#main").hide();
        $("#graficos-por-mes").removeClass("sin-estilo");
        $("#graficos-por-mes").show();
        graficoAntaresMeses(mes,gallitoColumna,jequetepequeColumna,talambozanaColumna,valvulasColumna);
      });
    } else if (modoValor == "hora") {
      $("#mainHoras").show();
      $("#btn-hora").show();
      $("#fecha").show();
      //$("#main").hide();
      // $("#btn-filtrar").hide();
      // $('#btn-filtrar').addClass("style-none");
      let fecha = "";
      graficoAntaresHoras(fecha,gallitoColumna,jequetepequeColumna,talambozanaColumna,valvulasColumna);
      $("#btn-hora").click(function () {
        $("#mainHoras").show();
        let fecha = $("#fecha").val();
        //$("#main").hide();
        graficoAntaresHoras(fecha,gallitoColumna,jequetepequeColumna,talambozanaColumna,valvulasColumna);
        //console.log(modo);
      });
    }
  });
});
//funciona correctamente - falta seleccionar por nombre de columna`
function graficoAntares(modo,gallitoColumna,jequetepequeColumna,talambozanaColumna,valvulasColumna) {
  $.ajax({
    type: "GET",
    url: "http://localhost/antares/main/grafico",
    data: {
      modo,
      gallitoColumna,
      jequetepequeColumna,
      talambozanaColumna,
      valvulasColumna,
    },
    success: function (response) {
      console.log(response);
      let data = JSON.parse(response);
      console.log(data);

      var chartDom = document.getElementById("main");
      var myChart = echarts.init(chartDom);
      var option;

      setTimeout(function () {
        option = {
          title: {
            text: "GRAFICO ANTARES:",
          },
          legend: {},
          tooltip: {
            trigger: "axis",
            showContent: false,
          },
          dataset: {
            source: [
              data[0].modo,
              data[0].gallito,
              data[0].jequetepeque,
              data[0].talambozana,
              data[0].valvulas,
            ],
          },
          xAxis: { type: "category" },
          yAxis: { gridIndex: 0 },
          grid: { top: "45%" },
          series: [
            {
              type: "line",
              smooth: true,
              seriesLayoutBy: "row",
              emphasis: { focus: "series" },
            },
            {
              type: "line",
              smooth: true,
              seriesLayoutBy: "row",
              emphasis: { focus: "series" },
            },
            {
              type: "line",
              smooth: true,
              seriesLayoutBy: "row",
              emphasis: { focus: "series" },
            },
            {
              type: "line",
              smooth: true,
              seriesLayoutBy: "row",
              emphasis: { focus: "series" },
            },
            {
              type: "pie",
              id: "pie",
              radius: "35%",
              center: ["50%", "25%"],
              emphasis: {
                focus: "self",
              },
              label: {
                formatter: "{b}: {@2023} ({d}%)",
              },
              encode: {
                itemName: "product",
                value: "2023",
                tooltip: "2023",
              },
            },
          ],
        };
        myChart.on("updateAxisPointer", function (event) {
          const xAxisInfo = event.axesInfo[0];
          if (xAxisInfo) {
            const dimension = xAxisInfo.value + 1;
            myChart.setOption({
              series: {
                id: "pie",
                label: {
                  formatter: "{b}: {@[" + dimension + "]} ({d}%)",
                },
                encode: {
                  value: dimension,
                  tooltip: dimension,
                },
              },
            });
          }
        });
        myChart.setOption(option);
      });

      option && myChart.setOption(option);
    },
  });
}
//funciona correctamente - falta seleccionar por nombre de columna
function graficoAntaresHoras(fecha,gallitoColumna,jequetepequeColumna,talambozanaColumna,valvulasColumna) {
  $.ajax({
    type: "POST",
    url: "http://localhost/antares/main/graficoHora",
    data: { fecha,gallitoColumna,jequetepequeColumna,talambozanaColumna,valvulasColumna},
    success: function (response) {
      //console.log(response);
      let data = JSON.parse(response);

      var dom = document.getElementById("mainHoras");
      var myChart = echarts.init(dom, null, {
        renderer: "canvas",
        useDirtyRect: false,
      });
      var app = {};

      var option;

      option = {
        title: {
          text: "Stacked Area Chart",
        },
        tooltip: {
          trigger: "axis",
          axisPointer: {
            type: "cross",
            label: {
              backgroundColor: "#6a7985",
            },
          },
        },
        legend: {
          data: ["Gallito", "Jequetepeque", "Talambozana", "Valvulas"],
        },
        toolbox: {
          feature: {
            saveAsImage: {},
          },
        },
        grid: {
          left: "3%",
          right: "4%",
          bottom: "3%",
          containLabel: true,
        },
        xAxis: [
          {
            type: "category",
            boundaryGap: false,
            data: data[0].modo,
          },
        ],
        yAxis: [
          {
            type: "value",
          },
        ],
        series: [
          {
            name: "Gallito",
            type: "line",
            stack: "Total",
            areaStyle: {},
            emphasis: {
              focus: "series",
            },
            data: data[0].gallito,
          },
          {
            name: "Jequetepeque",
            type: "line",
            stack: "Total",
            areaStyle: {},
            emphasis: {
              focus: "series",
            },
            data: data[0].jequetepeque,
          },
          {
            name: "Talambozana",
            type: "line",
            stack: "Total",
            areaStyle: {},
            emphasis: {
              focus: "series",
            },
            data: data[0].talambozana,
          },
          {
            name: "Valvulas",
            type: "line",
            stack: "Total",
            areaStyle: {},
            emphasis: {
              focus: "series",
            },
            data: data[0].valvulas,
          },
        ],
      };

      if (option && typeof option === "object") {
        myChart.setOption(option);
      }

      window.addEventListener("resize", myChart.resize);
    },
  });
}
//por mes en especifico
function graficoAntaresMeses(mes,gallitoColumna,jequetepequeColumna,talambozanaColumna,valvulasColumna) {
  $.ajax({
    type: "POST",
    url: "http://localhost/antares/main/graficoMes",
    data: { mes,gallitoColumna,jequetepequeColumna,talambozanaColumna,valvulasColumna},
    success: function (response) {
      //console.log(response);
      let data = JSON.parse(response);
      console.log(data.gallitoFecha);
      gallito(data.gallitoFecha, data.gallito);
      jequetepeque(data.jequetepequeFecha, data.jequetepeque);
      talambozana(data.talambozanaFecha, data.talambozana);
      valvulas(data.valvulasFecha, data.valvulas);
    },
  });
}
//grafico por mes gallito
function gallito(fecha, data) {
  var dom = document.getElementById("gallito");
  var myChartGallito = echarts.init(dom, null, {
    renderer: "canvas",
    useDirtyRect: false,
  });
  var app = {};
  var option;
  option = {
    xAxis: {
      type: "category",
      data: fecha,
    },
    yAxis: {
      type: "value",
    },
    series: [
      {
        data: data,
        type: "line",
        symbol: "triangle",
        symbolSize: 20,
        lineStyle: {
          color: "#5470C6",
          width: 4,
          type: "dashed",
        },
        itemStyle: {
          borderWidth: 3,
          borderColor: "#EE6666",
          color: "yellow",
        },
      },
    ],
  };

  if (option && typeof option === "object") {
    myChartGallito.setOption(option);
  }
  window.addEventListener("resize", myChartGallito.resize);
}
//grafico por mes jequetepeque
function jequetepeque(fecha, data) {
  var dom = document.getElementById("jequetepeque");
  var myChartJequetepeque = echarts.init(dom, null, {
    renderer: "canvas",
    useDirtyRect: false,
  });
  var app = {};
  var option;
  option = {
    xAxis: {
      type: "category",
      data: fecha,
    },
    yAxis: {
      type: "value",
    },
    series: [
      {
        data: data,
        type: "line",
        symbol: "triangle",
        symbolSize: 20,
        lineStyle: {
          color: "#5470C6",
          width: 4,
          type: "dashed",
        },
        itemStyle: {
          borderWidth: 3,
          borderColor: "#EE6666",
          color: "yellow",
        },
      },
    ],
  };

  if (option && typeof option === "object") {
    myChartJequetepeque.setOption(option);
  }
  window.addEventListener("resize", myChartJequetepeque.resize);
}
//grafico por mes talambozana
function talambozana(fecha, data) {
  var dom = document.getElementById("talambozana");
  var myChartTalambozana = echarts.init(dom, null, {
    renderer: "canvas",
    useDirtyRect: false,
  });
  var app = {};
  var option;
  option = {
    xAxis: {
      type: "category",
      data: fecha,
    },
    yAxis: {
      type: "value",
    },
    series: [
      {
        data: data,
        type: "line",
        symbol: "triangle",
        symbolSize: 20,
        lineStyle: {
          color: "#5470C6",
          width: 4,
          type: "dashed",
        },
        itemStyle: {
          borderWidth: 3,
          borderColor: "#EE6666",
          color: "yellow",
        },
      },
    ],
  };

  if (option && typeof option === "object") {
    myChartTalambozana.setOption(option);
  }
  window.addEventListener("resize", myChartTalambozana.resize);
}
//grafico por mes valvulas
function valvulas(fecha, data) {
  var dom = document.getElementById("valvulas");
  var myChartValvulas = echarts.init(dom, null, {
    renderer: "canvas",
    useDirtyRect: false,
  });
  var app = {};
  var option;
  option = {
    xAxis: {
      type: "category",
      data: fecha,
    },
    yAxis: {
      type: "value",
    },
    series: [
      {
        data: data,
        type: "line",
        symbol: "triangle",
        symbolSize: 20,
        lineStyle: {
          color: "#5470C6",
          width: 4,
          type: "dashed",
        },
        itemStyle: {
          borderWidth: 3,
          borderColor: "#EE6666",
          color: "yellow",
        },
      },
    ],
  };

  if (option && typeof option === "object") {
    myChartValvulas.setOption(option);
  }
  window.addEventListener("resize", myChartValvulas.resize);
}
