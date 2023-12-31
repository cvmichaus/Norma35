USE [NORMA35]
GO
/****** Object:  StoredProcedure [dbo].[sp_INC_NOM35_ContestaronGuia1]    Script Date: 28/10/2019 11:14:58 p. m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
-- =============================================
-- Author:		CARLOS MICHAUS BACERNAS
-- Create date: 25 -10- 2019
-- Description: SABER SI YA CONTESTARON LA GUIA 1
-- =============================================
ALTER PROCEDURE [dbo].[sp_INC_NOM35_TotalContestaronGuia5] 
	-- Add the parameters for the stored procedure here

AS
BEGIN
	-- SET NOCOUNT ON added to prevent extra result sets from
	-- interfering with SELECT statements.
	SET NOCOUNT ON;

    -- Insert statements for procedure here
	SELECT COUNT(*) as TotalGuia5 FROM tbl_CuestionarioN35_5 WHERE ContestadoC5 = 1
END
