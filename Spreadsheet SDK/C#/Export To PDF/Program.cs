//*******************************************************************************************//
//                                                                                           //
// Download Free Evaluation Version From: https://bytescout.com/download/web-installer       //
//                                                                                           //
// Also available as Web API! Free Trial Sign Up: https://secure.bytescout.com/users/sign_up //
//                                                                                           //
// Copyright © 2017-2018 ByteScout Inc. All rights reserved.                                 //
// http://www.bytescout.com                                                                  //
//                                                                                           //
//*******************************************************************************************//


using Bytescout.Spreadsheet;
using System.IO;

namespace XLS2PDF
{
    class Program
    {
        static void Main(string[] args)
        {
            Spreadsheet document = new Spreadsheet();

            // load table from existing XLS file        
            document.LoadFromFile("SimpleReport.xls");

            // add image
            document.Workbook.Worksheets[0].Pictures.Add(5, 1, "image.jpg");

            // save as PDF
            bool autosize = false;
            document.SaveAsPDF("Output.pdf", autosize);

            // close the document 
            document.Close();
        }
    }
}
