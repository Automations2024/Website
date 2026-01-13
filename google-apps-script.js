function doPost(e) {
  try {
    var sheet =
      SpreadsheetApp.getActiveSpreadsheet().getSheetByName("Career Page"); // tab name

    var row = [
      new Date(), // Timestamp
      e.parameter.name || "", // Name
      e.parameter.email || "", // Email
      e.parameter.mobile || "", // Mobile
      e.parameter.message || "", // Message
      e.parameter.fileName || "", // Resume (file name text only)
    ];

    sheet.appendRow(row);

    return ContentService.createTextOutput(
      JSON.stringify({ result: "success" })
    ).setMimeType(ContentService.MimeType.JSON);
  } catch (err) {
    return ContentService.createTextOutput(
      JSON.stringify({ result: "error", message: err.toString() })
    ).setMimeType(ContentService.MimeType.JSON);
  }
}
