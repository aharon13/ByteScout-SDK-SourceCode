'*******************************************************************************************'
'                                                                                           '
' Download Free Evaluation Version From:     https://bytescout.com/download/web-installer   '
'                                                                                           '
' Also available as Web API! Free Trial Sign Up: https://secure.bytescout.com/users/sign_up '
'                                                                                           '
' Copyright © 2017-2018 ByteScout Inc. All rights reserved.                                 '
' http://www.bytescout.com                                                                  '
'                                                                                           '
'*******************************************************************************************'


Imports Bytescout.PDFExtractor

Class Program

    Friend Shared Sub Main(args As String())

        ' Create Bytescout.PDFExtractor.XFAFormExtractor instance
        Dim extractor As New XFAFormExtractor()
        extractor.RegistrationName = "demo"
        extractor.RegistrationKey = "demo"

        ' Load sample PDF document
        extractor.LoadDocumentFromFile("samplexfa.pdf")

        ' Enumerate XFA form content part types
        For Each contentType As XFAFormContentType In [Enum].GetValues(GetType(XFAFormContentType))

            'Get count of content parts of specified type
            Dim partCount As Integer = extractor.GetCount(contentType)

            ' Save parts as XML files
            For i As Integer = 0 To partCount - 1
                Dim fileName As String = contentType.ToString() + i.ToString() + ".xml"
                extractor.SaveToFile(contentType, i, fileName)
                Console.WriteLine("Saved form part " + fileName)
            Next

        Next

        ' Cleanup
		extractor.Dispose()

        Console.WriteLine()
        Console.WriteLine("Press any key to continue...")
        Console.ReadLine()

    End Sub

End Class
