
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
-- =============================================
-- Author:		CARLOS MICHAUS BACERNAS
-- Create date: 25 -10- 2019
-- Description: SABER SI YA CONTESTARON LA GUIA 1
-- =============================================
CREATE PROCEDURE sp_INC_NOM35_ContestaronGuia5
	-- Add the parameters for the stored procedure here
	@CodUsu INT
AS
BEGIN
	-- SET NOCOUNT ON added to prevent extra result sets from
	-- interfering with SELECT statements.
	SET NOCOUNT ON;

    -- Insert statements for procedure here
	SELECT COUNT(*) as ContestoGuia5 FROM tbl_CuestionarioN35_5 WHERE CodUsuario = @CodUsu AND ContestadoC5 = 1
END
GO
