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


Imports System.Collections.Generic
Imports System.ServiceProcess
Imports System.Text

NotInheritable Class Program
	Private Sub New()
	End Sub
	''' <summary>
	''' The main entry point for the application.
	''' </summary>
	Friend Shared Sub Main()
		Dim servicesToRun As ServiceBase() = New ServiceBase() {New Service1()}

		ServiceBase.Run(servicesToRun)
	End Sub
End Class
