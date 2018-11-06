
function timeline({ data, rScale, adjustedSize, margin }) {
  const renderedPieces = [];

  const keys = Object.keys(data);

  keys.forEach(key => {
    //Only one piece of data per column though we'll render multiple graphical elements
    const column = data[key];
    const president = column.pieceData[0].data;

    //Calculate individual start and width of each graphical band
    const birthDate = rScale(president.birth);
    const termStart = rScale(president.start);
    const termEnd = rScale(president.end);
    const deathDate = rScale(president.death);
    const preTermWidth = termStart - birthDate;
    const termWidth = termEnd - termStart;
    const postTermWidth = deathDate - termEnd;

    //console.log(rScale, preTermWidth, birthDate, termStart, termEnd, deathDate)

    //You can return an array of graphics or an array of objects with extra data (see the Waterfall chart demo)
    const markObject = React.createElement(
      "g",
      { key: 'piece-${key}' },
      React.createElement("rect", {
        fill: "#00a2ce",
        width: preTermWidth,
        height: column.width,
        x: birthDate,
        y: column.x
      }),
      React.createElement("rect", {
        fill: "#4d430c",
        width: termWidth,
        height: column.width,
        x: termStart,
        y: column.x
      }),
      React.createElement("rect", {
        fill: "#b6a756",
        width: postTermWidth,
        height: column.width,
        x: termEnd,
        y: column.x
      })
    );

    renderedPieces.push(markObject);
  });

  return renderedPieces;
}

ReactDOM.render(React.createElement(OrdinalFrame, {
  projection: "horizontal",
  data: data,
  size: [700, 700],
  rExtent: [1732, 2018],
  rAccessor: "start",
  oAccessor: "name",
  oLabel: (d, i) => React.createElement(
    "text",
    { style: { textAnchor: "end", opacity: i % 2 ? 0.5 : 1 }, y: 4 },
    d
  ),
  oPadding: 3,
  type: {
    type: timeline
  },
  hoverAnnotation: true,
  tooltipContent: d => React.createElement(
    "div",
    { className: "tooltip-content" },
    React.createElement(
      "p",
      null,
      d.pieces[0].name
    ),
    React.createElement(
      "p",
      null,
      d.pieces[0].birth,
      " - ",
      d.pieces[0].death
    ),
    React.createElement(
      "p",
      null,
      "Age at Start of Presidency: ",
      d.pieces[0].start - d.pieces[0].birth
    ),
    React.createElement(
      "p",
      null,
      "Age at End of Presidency: ",
      d.pieces[0].end - d.pieces[0].birth
    ),
    React.createElement(
      "p",
      null,
      "Age at Death: ",
      d.pieces[0].death - d.pieces[0].birth
    )
  ),
  lineStyle: d => ({ fill: d.label, stroke: d.label, fillOpacity: 0.75 }),
  axis: { orient: "left" },
  margin: { left: 140, top: 10, bottom: 50, right: 20 }
}), document.getElementById("viz"));

