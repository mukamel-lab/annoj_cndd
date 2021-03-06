	AnnoJ.config = {

		tracks : [

			{
				id : '1_1',
				name : 'Gene Models (hg19_Gencode_v19.php)',
				type : 'ModelsTrack',
				path : 'Annotation Models',
				data : '/aj2/models/hg19_Gencode_v19.php',
				iconCls : 'silk_bricks',
				height : 100,
				scale : 1,
				showControls : 1,
			},
			{
				id : '2_1',
				name : 'Down Syndrome - 31-08',
				type : 'MethTrack',
				path : 'Esteller_TransPsych2016',
				data : '/aj2/tracks/ckeown/Esteller_TransPsych2016/Esteller_TransPsych2016/31-08.php',
				iconCls : 'salk_meth',
				height : 40,
				scale : .2,
				class: 'CG CHG CHH',
			},
			{
				id : '2_2',
				name : 'Control Gray matter - G145',
				type : 'MethTrack',
				path : 'Esteller_TransPsych2016',
				data : '/aj2/tracks/ckeown/Esteller_TransPsych2016/Esteller_TransPsych2016/G145.php',
				iconCls : 'salk_meth',
				height : 40,
				scale : .15,
				class: 'CG CHG CHH',
			},
			{
				id : '2_3',
				name : 'Control white matter - W145',
				type : 'MethTrack',
				path : 'Esteller_TransPsych2016',
				data : '/aj2/tracks/ckeown/Esteller_TransPsych2016/Esteller_TransPsych2016/W145.php',
				iconCls : 'salk_meth',
				height : 40,
				scale : .15,
			},
			{
				id : '2_4',
				name : 'Alzheimers - A09',
				type : 'MethTrack',
				path : 'Esteller_TransPsych2016',
				data : '/aj2/tracks/ckeown/Esteller_TransPsych2016/Esteller_TransPsych2016/A09.php',
				iconCls : 'salk_meth',
				height : 40,
				scale : .15,
			},
			{
				id : '2_5',
				name : 'Parkinsons - BK1027',
				type : 'MethTrack',
				path : 'Esteller_TransPsych2016',
				data : '/aj2/tracks/ckeown/Esteller_TransPsych2016/Esteller_TransPsych2016/BK1027.php',
				iconCls : 'salk_meth',
				height : 40,
				scale : .15,
			},
			{
				id : '2_6',
				name : 'data',
				type : 'MaskTrack',
				path : 'Esteller_TransPsych2016',
				data : '/aj2/tracks/emukamel/Esteller_TransPsych2016b/Esteller_TransPsych2016/data.php',
				iconCls : 'salk_bed',
				height : 40,
				scale : 1,
			},
			{
				id : '2_7',
				name : 'data',
				type : 'IntensityTrack',
				path : 'Esteller_TransPsych2016',
				data : '/aj2/tracks/emukamel/Esteller_TransPsych2016b/Esteller_TransPsych2016/data.php',
				iconCls : 'silk_bricks',
				height : 40,
				scale : 1,
			},
			{
				id : '3_1',
				name : 'ListerMukamel_hg19_DMRs',
				type : 'MaskTrack',
				path : 'DMRs_SimpleDB',
				data : '/aj2/tracks/emukamel/Esteller_TransPsych2016b/ListerMukamel_DMRs1.php',
				iconCls : 'salk_bed',
				height : 40,
				scale : 1,
			},
			{
				id : '4_1',
				name : 'CGDMRs_hs_NeuNpos_hypo_mCG_hg19',
				type : 'ReadsTrack',
				path : 'DMRs',
				data : '/aj2/tracks/emukamel/Esteller_TransPsych2016b/DMRs/CGDMRs_hs_NeuNpos_hypo_mCG_hg19.php',
				iconCls : 'salk_dmr',
				height : 40,
				scale : 1,
			},
			{
				id : '4_2',
				name : 'CGDMRs_hs_NeuNneg_hypo_mCG_hg19',
				type : 'MaskTrack',
				path : 'DMRs',
				data : '/aj2/tracks/emukamel/Esteller_TransPsych2016b/DMRs/CGDMRs_hs_NeuNneg_hypo_mCG_hg19.php',
				iconCls : 'salk_dmr',
				height : 40,
				scale : 1,
			},
			{
				id : '5_1',
				name : 'hs_brain_25yo_1',
				type : 'MethTrack',
				path : 'TestMeth',
				data : '/aj2/tracks/emukamel/Esteller_TransPsych2016b/TestMeth/hs_brain_25yo_1.php',
				iconCls : 'salk_meth',
				height : 40,
				scale : 1,
			},
			{
				id : '6_1',
				name : 'mc_hs_UMB_579_53yo_fc_NeuN_neg_1',
				type : 'MethTrack',
				path : 'DNA methylation - ListerMukamel2013',
				data : '/aj2/tracks/emukamel/Esteller_TransPsych2016b/DNA_methylation_-_ListerMukamel2013/mc_hs_UMB_579_53yo_fc_NeuN_neg.php',
				iconCls : 'salk_meth',
				height : 40,
				scale : 0.15,
				class: 'CG CHG CHH',
			},
			{
				id : '6_2',
				name : 'mc_hs_UMB_579_53yo_fc_NeuN_pos_1',
				type : 'MethTrack',
				path : 'DNA methylation - ListerMukamel2013',
				data : '/aj2/tracks/emukamel/Esteller_TransPsych2016b/DNA_methylation_-_ListerMukamel2013/mc_hs_UMB_579_53yo_fc_NeuN_pos.php',
				iconCls : 'salk_meth',
				height : 40,
				scale : .15,
				class: 'CG CWC CWD',
			},
			{
				id : '6_3',
				name : 'mc_hs_UMB_797_55yo_fc_NeuN_neg_1',
				type : 'MethTrack',
				path : 'DNA methylation - ListerMukamel2013',
				data : '/aj2/tracks/emukamel/Esteller_TransPsych2016b/DNA_methylation_-_ListerMukamel2013/mc_hs_UMB_797_55yo_fc_NeuN_neg_1.php',
				iconCls : 'salk_meth',
				height : 40,
				scale : .15,
				class: 'CG CWC CWD',
			},
			{
				id : '6_4',
				name : 'mc_hs_UMB_797_55yo_fc_NeuN_pos_1',
				type : 'MethTrack',
				path : 'DNA methylation - ListerMukamel2013',
				data : '/aj2/tracks/emukamel/Esteller_TransPsych2016b/DNA_methylation_-_ListerMukamel2013/mc_hs_UMB_797_55yo_fc_NeuN_pos_1.php',
				iconCls : 'salk_meth',
				height : 40,
				scale : .15,
				class: 'CG CWC CWD',
			},
			{
				id : '6_5',
				name : 'mc_hs_UMB_797_55yo_fc_tissue_1',
				type : 'MethTrack',
				path : 'DNA methylation - ListerMukamel2013',
				data : '/aj2/tracks/emukamel/Esteller_TransPsych2016b/DNA_methylation_-_ListerMukamel2013/mc_hs_UMB_797_55yo_fc_tissue_1.php',
				iconCls : 'salk_meth',
				height : 40,
				scale : .15,
				class: 'CG CWC CWD',
			},
			{
				id : '6_6',
				name : 'mc_hs_fetal_brain_1',
				type : 'MethTrack',
				path : 'DNA methylation - ListerMukamel2013',
				data : '/aj2/tracks/emukamel/Esteller_TransPsych2016b/DNA_methylation_-_ListerMukamel2013/mc_hs_fetal_brain_1.php',
				iconCls : 'salk_meth',
				height : 40,
				scale : .15,
				class: 'CG CWC CWD',
			},
		],

		active : ['1_1', '2_2', '2_3', '2_1', '2_4', '2_5', '3_1', '4_1', '4_2', '6_6', '6_5', '6_1', '6_3', '6_2', '6_4'],

		title : 'Esteller_HumanNeurodegenerative',
		genome : '/aj2/genomes/hg19.php',
		bookmarks : '/aj2/includes/common_bookmarks.php',
		analysis : '/aj2/includes/analysis.php',
		location : {
			assembly : '5',
			position : '88013975',
			bases : 200,
			pixels : 1,
		},
		admin : {
			name : 'Eran Mukamel',
			email : 'emukamel@ucsd.edu',
			notes : '',
		},
		settings : {
			baseline : 0,
			scale : 2,
			multi : 1,
			yaxis : 20,
		},
		citation : '',
		jbuilder : 4.0,
	};
