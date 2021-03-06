import pymysql;
from datetime import  datetime;
from dateutil.relativedelta import relativedelta;
import numpy as np;
conn = pymysql.connect(host ='localhost',user = 'root', password = 'root', db = 'djangorbi');
class MySQL_CAL:
    def GET_TBL_52(self, fluid):
        row = np.zeros(10);
        Cursor = conn.cursor();
        try:
            sql = "SELECT `MW`,`Density`,`NBP`,`ideal`,`A`,`B`,`C`,`D`,`E`,`Auto` FROM `TBL_52_CA_PROPERTIES_LEVEL_1` WHERE `Fluid` = '" + fluid + "'";
            Cursor.execute(sql);
            for r in Cursor:
                row[0] = r[0];
                row[1] = r[1];
                row[2] = r[2];
                row[3] = r[3];
                row[4] = r[4];
                row[5] = r[5];
                row[6] = r[6];
                row[7] = r[7];
                row[8] = r[8];
                row[9] = r[9];
        except pymysql.InternalError as Error:
            print("Error! execute table 5.2");
        return row;

    def GET_RELEASE_PHASE(self, fluid):
        data = "Liquid";
        Cursor = conn.cursor();
        try:
            sql = "SELECT `Ambient` FROM `TBL_52_CA_PROPERTIES_LEVEL_1` WHERE `Fluid` = '" + fluid + "'";
            Cursor.execute(sql);
            for r in Cursor:
                data = r[0];
        except pymysql.InternalError as Error:
            print("Error! get Release Phase from table 5.2");
        return data;

    def GET_TBL_58(self, fluid):
        data = np.zeros(16);
        Cursor = conn.cursor();
        try:
            sql = "SELECT * FROM `TBL_58_CA_COMPONENT_DM` WHERE `Fluid` = '" + fluid + "'";
            Cursor.execute(sql);
            for r in Cursor:
                data[0] = r[1];
                data[1] = r[2];
                data[2] = r[3];
                data[3] = r[4];
                data[4] = r[5];
                data[5] = r[6];
                data[6] = r[7];
                data[7] = r[8];
                data[8] = r[9];
                data[9] = r[10];
                data[10] = r[11];
                data[11] = r[12];
                data[12] = r[13];
                data[13] = r[14];
                data[14] = r[15];
                data[15] = r[16];
        except pymysql.InternalError as Error:
            print("Error! execute data from table 5.8 error!");
        return data;

    def GET_TBL_59(self, fluid):
        Cursor = conn.cursor();
        data = np.zeros(16);
        try:
            sql = "SELECT * FROM `TBL_59_COMPONENT_DAMAGE_PERSON` WHERE `Fluid` = '" + fluid + "'";
            Cursor.execute(sql);
            for r in Cursor:
                data[0] = r[1];
                data[1] = r[2];
                data[2] = r[3];
                data[3] = r[4];
                data[4] = r[5];
                data[5] = r[6];
                data[6] = r[7];
                data[7] = r[8];
                data[8] = r[9];
                data[9] = r[10];
                data[10] = r[11];
                data[11] = r[12];
                data[12] = r[13];
                data[13] = r[14];
                data[14] = r[15];
                data[15] = r[16];
        except pymysql.InternalError as Error:
            print("Error! Execute data Table 5.9 Fail");
        return data;

    def GET_TBL_213(self, thickness):
        Cursor = conn.cursor();
        data = np.zeros(4);
        try:
            sql = "SELECT * FROM `TBL_213_DM_IMPACT_EXEMPTION` WHERE `ComponentThickness` = '" + str(thickness) + "'";
            Cursor.execute(sql);
            for r in Cursor:
                data[0] = r[1];
                data[1] = r[2];
                data[2] = r[3];
                data[3] = r[4];
        except pymysql.InternalError as Error:
            print("Error! Execute data from Table 213 Fail");
        return data;

    def GET_TBL_204(self, susceptibility):
        Cursor = conn.cursor();
        data = np.zeros(7);
        try:
            sql = "SELECT * FROM `TBL_204_DM_HTHA` WHERE `Susceptibility` = '"+susceptibility+"'";
            Cursor.execute(sql);
            for r in Cursor:
                data[0] = r[1];
                data[1] = r[2];
                data[2] = r[3];
                data[3] = r[4];
                data[4] = r[5];
                data[5] = r[6];
                data[6] = r[7];
        except pymysql.InternalError as Error:
            print("Error! Execute sql from table 204 Fail");
        return data;

    def GET_TBL_214(self, DeltaT, size):
        Cursor = conn.cursor();
        data = 0.0;
        try:
            sql = "SELECT `"+str(size)+"` FROM djangorbi.tbl_214_dm_not_pwht WHERE `Tmin-Tref` = '"+str(DeltaT)+"'";
            Cursor.execute(sql);
            for r in Cursor:
                data = r;
        except pymysql.InternalError as Error:
            print("Error! Execute sql from table 214 Fail");
        return data;

    def GET_TBL_215(self, DeltaT, size):
        Cursor = conn.cursor();
        data = 0;
        try:
            sql = "SELECT `" + str(size) + "` FROM `TBL_215_DM_PWHT` WHERE `Tmin-Tref` = '" + str(DeltaT) + "'";
            Cursor.execute(sql);
            for r in Cursor:
                data = r;
        except pymysql.InternalError as Error:
            print("Error! Execute sql from table 215 fail");
        return data;

    def GET_TBL_511(self, ART, INSP, Effective):
        data = 0;
        Cursor = conn.cursor();
        try:
            sql = "";
            if(Effective == "E"):
                sql = "SELECT `E` FROM `TBL_511_DFB_THIN` WHERE `art` ='" + str(ART) + "'";
            else:
                sql = "SELECT `" + Effective + "` FROM `TBL_511_DFB_THIN` WHERE `art` ='" + str(ART) + "' AND `insp` = '" + str(INSP) + "'";
            Cursor.execute(sql);
            for r in Cursor:
                data = r;
        except pymysql.InternalError as Error:
            print("Error! Execute sql from table 511 Fail");
        return data;

    def GET_TBL_512(self, ART, Effective):
        data = 0;
        Cursor = conn.cursor();
        try:
            sql = "SELECT `"+Effective+"` FROM `TBL_512_DFB_THIN_TANK_BOTTOM` WHERE `art` = '"+str(ART)+"'";
            Cursor.execute(sql);
            for r in Cursor:
                data = r;
        except pymysql.InternalError as Error:
            print("Error! Execute sql from table 512 fail!");
        return data;

    def GET_TBL_64(self, YEAR, Suscep):
        data = 0;
        Cursor = conn.cursor();
        try:
            sql = "SELECT `" + Suscep + "` FROM `TBL_64_DM_LINNING_INORGANIC` WHERE `YearsSinceLastInspection` = '" + str(YEAR) + "'";
            Cursor.execute(sql);
            for r in Cursor:
                data = r;
        except pymysql.InternalError as Error:
            print("Error! Execute sql from table 64 fail!");
        return data;

    def GET_TBL_65(self, YEAR, Suscep):
        data = 0;
        Cursor = conn.cursor();
        try:
            sql = "SELECT `" + Suscep + "` FROM `TBL_65_DM_LINNING_ORGANIC` WHERE `YearInService` = '" + str(YEAR) + "'";
            Cursor.execute(sql);
            for r in Cursor:
                data = r;
        except pymysql.InternalError as Error:
            print("Error! Execute sql from table 65 fail");
        return data;

    def GET_TBL_74(self, SVI, field):
        data = 0;
        Cursor = conn.cursor();
        try:
            sql = "SELECT `" + field + "` FROM `TBL_74_SCC_DM_PWHT` WHERE `SVI` ='" + str(SVI) + "'";
            Cursor.execute(sql);
            for r in Cursor:
                data = r;
        except pymysql.InternalError as Error:
            print("Error! Execute sql from table 74 fail");
        return data;

    def GET_TBL_3B21(self, locat):
        data = 0;
        Cursor = conn.cursor();
        try:
            sql = "SELECT `SIUnits` FROM `TBL_3B21_SI_CONVERSION` WHERE `conversionFactory` = '" + str(locat) + "'";
            Cursor.execute(sql);
            for r in Cursor:
                data = r;
        except pymysql.InternalError as Error:
            print("Error! Execute sql from table 3B21 fail");
        return data;

    def GET_TBL_71_PROPERTIES(self, FluidTank):
        data = np.zeros(3);
        Cursor = conn.cursor();
        try:
            sql = "SELECT `Molecular Weight`,`Liquid Density`,`Liquid Density Viscosity` FROM `TBL_71_PROPERTIES_STORAGE_TANK` WHERE `Fluid`='" + FluidTank + "'";
            Cursor.execute(sql);
            for r in Cursor:
                data[0] = r[0];
                data[1] = r[1];
                data[2] = r[2];
        except pymysql.InternalError as Error:
            print("Error! Execute sql from table 71 fail");
        return data;

    def GET_API_COM(self, APIComponentTypeName):
        data = np.zeros(13);
        Cursor = conn.cursor();
        try:
            sql = "SELECT * FROM `api_component_type` WHERE `APIComponentTypeName` = '"+APIComponentTypeName+"'";
            Cursor.execute(sql);
            for r in Cursor:
                data[0] = r[2];
                data[1] = r[3];
                data[2] = r[4];
                data[3] = r[5];
                data[4] = r[6];
                data[5] = r[7];
                data[6] = r[8];
                data[7] = r[9];
                data[8] = r[10];
                data[9] = r[11];
                data[10] = r[12];
                data[11] = r[13];
                data[12] = r[14];
        except pymysql.InternalError as Error:
            print("Error! Execute sql table API_COMPONENT_TYPE fail");
        return data;




