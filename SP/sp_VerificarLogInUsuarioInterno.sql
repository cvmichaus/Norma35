GO
/****** Object:  StoredProcedure [dbo].[sp_VerificarLogInUsuarioInterno]    Script Date: 23/10/2019 12:00:12 p. m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[sp_VerificarLogInUsuarioInterno]

@CodVerificacion VARCHAR(max),
@responseMessage VARCHAR(254) OUTPUT
AS
BEGIN
	 DECLARE @userID INT

    IF EXISTS (SELECT *	from tbl_Usuarios T1 WHERE CodVerificacion = @CodVerificacion AND T1.Status = 'A' )
    BEGIN
		SET @responseMessage='Acceso correcto'
    END
    ELSE
	BEGIN
       SET @responseMessage='Denegar Acceso'
	END
END
