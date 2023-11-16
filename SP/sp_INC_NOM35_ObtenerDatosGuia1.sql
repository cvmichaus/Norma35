
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
-- =============================================
-- Author:		<Author,,Name>
-- Create date: <Create Date,,>
-- Description:	<Description,,>
-- =============================================
CREATE PROCEDURE sp_INC_NOM35_ObtenerDatosGuia1 
	-- Add the parameters for the stored procedure here
	@CodUsu INT 
	
AS
BEGIN
	-- SET NOCOUNT ON added to prevent extra result sets from
	-- interfering with SELECT statements.
	SET NOCOUNT ON;

    -- Insert statements for procedure here
	SELECT Continua FROM tbl_CuestionarioN35_1 where CodUsuario = @CodUsu AND Contestado = 1
END
GO
