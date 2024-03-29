<html>
<head>
  <meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1'>
  <title>BICCN: Mouse primary motor cortex (MOp) cell types</title>

  <link type='text/css' rel='stylesheet' href='annoj_cndd/aj2_css_dev/ext-all.css' />
  <script type='text/javascript' src='annoj_cndd/js/ext-base-3.2.js'></script>
  <script type='text/javascript' src='annoj_cndd/js/ext-all-3.2.js'></script>

  <link type='text/css' rel='stylesheet' href='annoj_cndd/aj2_css_dev/viewport.css' />
  <link type='text/css' rel='stylesheet' href='annoj_cndd/aj2_css_dev/plugins.css' />
  <link type='text/css' rel='stylesheet' href='annoj_cndd/aj2_css_dev/salk.css' />
  <script type='text/javascript' src='annoj_cndd/js/excanvas.js'></script>
  <script type='text/javascript' src='annoj_cndd/js/aj-netX-EAM.js'></script>
  
  <!-- cluster info -->
  <script type="text/javascript" src="miniatlas_clusters.js"></script>
  <?php 
  include './annoj_cndd/includes/loadCsv.php'; 
  $fn = 'miniatlas_tracks.csv';
  loadCsv($fn);
  ?>

  <!-- Config -->
  <script type='text/javascript'>



  AnnoJ.config = {
    scaleTrackGroups: ['atac','scrna','snrna'],
    info : {
      title  : 'Mouse MOp BICCN',
      genome  : 'Genome: mm10',
      contact  : 'Contact: Eran Mukamel',
      email : 'emukamel@ucsd.edu',
      institution : 'UCSD'
    },
    tracks : [
      {
        id   : 'gene_model_mm10',
        name : 'Gene Models (mm10)',
        type : 'ModelsTrack',
        path : 'Annotation models',
        data : './browser/fetchers/models/genes_mm10.php',
        height : 100,
        showControls : true, cls :  "AJ_track AJ_darkborder",
      },
      {
        id   : 'gene_model_mm10_gencode_vM2',
        name : 'Gene Models (mm10 Gencode vM2)',
        type : 'ModelsTrack',
        path : 'Annotation models',
        data : './browser/fetchers/models/genes_mm10_gencode.php',
        height : 100,
        showControls : true, cls :  "AJ_track AJ_darkborder",
      },
      {
        id   : 'models_mm10_line1',
        name : 'L1 - Line1 repeats',
        type : 'ModelsTrack',
        path : 'Annotation models',
        data : './browser/fetchers/models/models_mm10_line1.php',
        height : 100,
        showControls : true, cls :  "AJ_track AJ_darkborder",
      },
    ],

  active : ['gene_model_mm10'],
  genome    : 'annoj_cndd/genomes/mm10.php',
  bookmarks : 'annoj_cndd/genomes/mm10.php',
  stylesheets : [
  {
    id   : 'css1',
    name : 'Plugins CSS',
    href : 'css/plugins.css',
    active : true
  },{
    id   : 'css2',
    name : 'SALK CSS',
    href : 'css/salk.css',
    active : true
  }
  ],
  location : {
    assembly : '1',
    position : '132487763',
    bases    : 300,
    pixels   : 1
  },
  admin : {
    name  : 'Eran Mukamel',
    email : 'emukamel@ucsd.edu',
    notes : 'University of California, San Diego'
  },
};

// Add tracks
var new_tracks=[]; 
var track_height=20;
for (i=0; i<tracks.length; i++) {
  var hidden = false;
  if (/^#/.test(tracks[i].ensemble)) { hidden = true; }
  tracks[i].ensemble = tracks[i].ensemble.replace('#','')
  trackdata=tracks[i];
  trackdata['modality']='mcg';
  track = {
    'id'   : 'mcg_ens'+tracks[i].ensemble+'_C'+tracks[i].cluster+'_CGN',
    'name' : 'mCG '+tracks[i].name+' C'+tracks[i].cluster,
    'type' : 'MethTrack',
    'path' : 'Epigenome/DNA Methylation',
    'data' : './browser/fetchers/mc/mc_round'+tracks[i].ensemble+'_C'+tracks[i].cluster+'.php',
    'iconCls' : 'salk_meth',
    'height' : track_height,
    'class' : 'CG -COV',
    'single': true,
    'showControls' : false,
    'modality' : 'mcg', 'hidden': hidden, 'cluster': tracks[i].cluster,
    'trackdata' : trackdata,
  };
  new_tracks.push(track);

  // **** mCH
  trackdata['modality']='mch';
  track = {
      'id'   : 'mcac_ens'+tracks[i].ensemble+'_C'+tracks[i].cluster+'_CAC',
      'name' : 'mCAC '+tracks[i].name+' C'+tracks[i].cluster,
      'type' : 'MethTrack',
      'path' : 'Epigenome/DNA Methylation',
      'data' : './browser/fetchers/mc/mc_round'+tracks[i].ensemble+'_C'+tracks[i].cluster+'_CAC.php',
      'iconCls' : 'salk_meth',
      'height' : track_height,
      'class' : 'CH -COV',
      'single': true,
      'showControls' : false, 
      'modality' : 'mcac','hidden': hidden, 'cluster': tracks[i].cluster,
      'trackdata' : trackdata,
    };
  new_tracks.push(track);

  trackdata['modality']='atac';
  track = {
    'id'   : 'atac_ens'+tracks[i].ensemble+'_C'+tracks[i].cluster,
    'name' : 'ATAC '+tracks[i].name+' C'+tracks[i].cluster,
    'type' : 'PairedEndTrack',
    'path' : 'Epigenome/ATAC-Seq',
    'data' : './browser/fetchers/atac/atac_round'+tracks[i].ensemble+'_C'+tracks[i].cluster+'.php',
    'iconCls' : 'salk_bed',
    'height' : track_height,
    'scale': atac_scales[tracks[i].cluster],
    'single': true,'modality' : 'atac', 'hidden': hidden, 'cluster': tracks[i].cluster,
    'trackdata' : trackdata,
  }
  new_tracks.push(track);

  trackdata['modality']='snrna';
  track = {
    'id'   : 'snRNA_ens'+tracks[i].ensemble+'_C'+tracks[i].cluster,
    'name' : 'snRNA '+tracks[i].name+' C'+tracks[i].cluster,
    'type' : 'PairedEndTrack',
    'path' : 'RNA/snRNA-Seq',
    'data' : './browser/fetchers/rna/RNA_round'+tracks[i].ensemble+'_C'+tracks[i].cluster+'.php',
    'iconCls' : 'silk_bricks',
    'height' : track_height,
    'scale': snrna_scales[tracks[i].cluster],
    'single': true,
    'color' : {count: '#ff0000'},
    'modality' : 'snrna', 
    'hidden': hidden, 
    'trackdata' : trackdata,
    'cluster': tracks[i].cluster,
    
  };
  new_tracks.push(track);

  trackdata['modality']='scrna';
  track = {
    'id'   : 'scRNA_ens'+tracks[i].ensemble+'_C'+tracks[i].cluster,
    'name' : 'scRNA '+tracks[i].name+' C'+tracks[i].cluster,
    'type' : 'PairedEndTrack',
    'path' : 'RNA/scRNA-Seq',
    'data' : './browser/fetchers/rna/scRNA_round'+tracks[i].ensemble+'_C'+tracks[i].cluster+'.php',
    'iconCls' : 'silk_bricks',
    'height' : track_height,
    'scale': scrna_scales[tracks[i].cluster],
    'single': true,
    'color' : {count: '#af0770'},
    'modality' : 'scrna', 'hidden': hidden, 'cluster': tracks[i].cluster,
    'trackdata' : trackdata,
    };
  new_tracks.push(track);
}

// REPTILE enhancers

var enhancer_clusters = [
"mESC",
"ens2_L23_IT",
"ens2_L5_PT",
"ens2_L45_IT_1",
"ens2_L45_IT_2",
"ens2_L5_IT_S100b",
"ens2_L6_CT",
"ens2_L6_IT",
"ens2_L6_NP",
"ens2_Lamp5",
"ens2_Pvalb_Calb1",
"ens2_Pvalb_Reln",
"ens2_Sst",
"ens2_Vip",
]; 
var enhancer_parent_cluster = [
"mESC",
"C4_2",
"C9_1",
"C1_1",
"C1_2",
"C3_2",
"C2_3",
"C3_1",
"C7_1",
"C6_6",
"C5_2",
"C5_1",
"C5_3",
"C6_3",
];
var enhancer_group = [
"mESC",
"L2/3 IT",
"L5 PT",
"L4/5 IT_1",
"L4/5 IT_2",
"L5 IT",
"L6 CT",
"L6 IT",
"L6 NP",
"Lamp5",
"Pvalb Calb1",
"Pvalb Reln",
"Sst",
"Vip",
];
var enhancer_cellclass = [
"mESC",
"exc",
"exc",
"exc",
"exc",
"exc",
"exc",
"exc",
"exc",
"inh:cge",
"inh:mge",
"inh:mge",
"inh:mge",
"inh:cge",
];

for (var i=0; i<enhancer_clusters.length; i++) {
  cluster = enhancer_clusters[i];
  track = {
    'id'   : 'Enhancer_'+cluster,
    'name' : 'Enhancer '+cluster.replace('ens2_','ens2 '+enhancer_parent_cluster[i]+' '),
    'type' : 'PairedEndTrack',
    'path' : 'Enhancers',
    'data' : './browser/fetchers/dmr/ENHANCER_'+cluster+'.php',
    'iconCls' : 'dmr',
    'height' : 5,
    'scale': 100,
    'single': true,
    'color' : {read: '#000000'},
    'modality' : 'enhancer', 
    'cluster' : enhancer_parent_cluster[i].replace(/^C/,''), 
    'hidden' : false,
    'trackdata' : {'enhancer_group': enhancer_group[i], 'name': '0'+enhancer_group[i], 'cellclass': enhancer_cellclass[i]},
  };
  new_tracks.push(track);
}
AnnoJ.config.tracks = AnnoJ.config.tracks.concat(new_tracks);
</script>

<!-- Enable URL queries -->
<script type='text/javascript'> var queryPost; </script>
<script type='text/javascript' src='./browser/js/urlinit.js'></script>

<!--   // If the URL contains a gene, look up its coordinates and set the location of the browser -->
<?php
  $gene = $_GET["gene"];
  if ($gene) {
    $conn = new mysqli("localhost","cndd_annoj","jonna_ddnc","models");

    $table = "models_mm10";
    $result = $conn->query("SELECT id, assembly, IF(strand='+',start,end) AS tss from $table where id like '%$gene%' LIMIT 1"); 
    
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      echo "<script>";
      echo "AnnoJ.config.location.assembly =" . $row["assembly"] . ";";
      echo "AnnoJ.config.location.position =" . $row["tss"] . ";";
      echo " </script>";
    }
  }
?>

<script type='text/javascript'>
  

  // Set active tracks
var re_ens = new RegExp('_ens'+ensemble+'_');
var re_modality, modality = [];
var AllModalities = ['mcg','enhancer','mcac','atac','scRNA','snRNA'];
var showModalities=trackgroups.replace(/:$/,'').split(':');

// Select the tracks to be shown
function myTrackFilter(track) {
  var out=false;
  var clusters=cluster.split(':');
  var tracknames_re=RegExp(tracknames.split(':').join('|'),"i");
  try {
    out = (RegExp(celltype).test(track.trackdata.cellclass) || 
      (cluster && clusters.indexOf(track.trackdata.cluster)>-1) || 
      (tracknames && tracknames_re.test(track.trackdata.name)) || 
      celltype=='all') && 
      re_ens.test(track['id']) &&
      showModalities.includes(track['modality']) &&
      !track['hidden'];
  } catch {
    out = false;
  }
  return out;
}
var currTracks=AnnoJ.config.tracks.filter(myTrackFilter);
// var currTracks=AnnoJ.config.tracks.filter(x => RegExp(celltype).test(x.trackdata.cellclass) & re_ens.test(x['id']) & 
//   showModalities.includes(x['modality']) & !x['hidden']);

// Sort the tracks by cell type, then modality
function modalityIndex(a) {
  var out=-1;
  if (a['modality']) {
    var mod=a['modality'];
    if (mod=='enhancer') { mod=AllModalities[0]; }
    out=AllModalities.findIndex(function (x) { return RegExp(x,'i').test(mod)});
    // if (mod=='enhancer') { mod='0a'; }
  } else { out=-1; }
  return out
}
function getCellTypeModality(a, groupby) {
  // var x=a['cluster'];
  switch (groupby) {
    case 'modality':
      var x=a['trackdata']['enhancer_group'].replace('/','');
      // if (a['modality']!='enhancer') {
      //   x = x+'0';
      // }
      x = modalityIndex(a)+'_'+x;
      break;
    case 'celltype':
      var x=a['trackdata']['enhancer_group']+a['trackdata']['name'];
      x = x+'_'+modalityIndex(a);
      break;
    default:
      break;
  }
  return x;
}
currTracks.sort(function(a, b) { return (getCellTypeModality(a,groupby) > getCellTypeModality(b,groupby)) ? 1 : -1});
for (i=0; i<currTracks.length; i++) {
  AnnoJ.config.active.push(currTracks[i].id);
  var nextTrack=currTracks[i+1];
  // if (groupby=='modality') {
  //   if (nextTrack) {
  //     if (nextTrack['modality']=='enhancer') {
  //           nextTrack=currTracks[i+2];
  //     }
  //   }
  // }
  // Add a border between track groups
  if (nextTrack) {
    // console.log(currTracks[i].id, modalityIndex(currTracks[i]), modalityIndex(nextTrack));
    if ((groupby=='celltype' && currTracks[i].modality!='enhancer' &&
     (currTracks[i].cluster!=nextTrack.cluster || nextTrack.modality=='enhancer')) || 
      (groupby=='modality' && (currTracks[i].modality!=nextTrack.modality) && 
        currTracks[i].modality!='enhancer' && nextTrack.modality!='enhancer')) {
        AnnoJ.config.tracks.find(x => x['id']==currTracks[i].id).cls =  "AJ_track AJ_darkborder";
    }
  }
}

    // Set track colors
    var my_celltype='', modality='', color='', tmp='';
    for (i=0; i<AnnoJ.config.tracks.length; i++) {
      var track=AnnoJ.config.tracks[i];
      [modality,tmp,my_celltype,cellclass] = track.name.split(' ');
      // if (celltype) {var x = celltype.match(/^C[0-9]+_[0-9]/); celltype=x;}
      if (my_celltype) { my_celltype = my_celltype.match(/^C[0-9]+_[0-9]/);}
      if (my_celltype) { my_celltype = my_celltype[0].replace('C',''); } else { my_celltype = ''; }
      switch (colorby) {
        case 'celltype':
        color = cluster_colors[my_celltype];
        break;
        case 'modality':
        color = cluster_colors[modality];
        break;
        case 'cellclass':
        color = cluster_colors[cellclass];
        break;
      }
      // AnnoJ.config.tracks[i].cluster_rank = cluster_ranks[celltype]
      switch (modality) {
        case 'mCG': 
        AnnoJ.config.tracks[i].color = {'CG': color};
        break;
        case 'mCAC': 
        AnnoJ.config.tracks[i].color = {'CG': color};
        break;
        case 'ATAC':
        AnnoJ.config.tracks[i].color = {'count': color, 'read': color};
        break;
        case 'RNA':
        AnnoJ.config.tracks[i].color = {'count': color};
        break;
      }
    }

    // // Set track height
    // var ntracks = AnnoJ.config.active.length;
    // var track_height = Math.min(Math.max(window.innerHeight/ntracks,7),30);
    // console.log(ntracks)
    // console.log(track_height)
    // for (i=0; i<AnnoJ.config.tracks.length; i++) {
    //   if (AnnoJ.config.tracks[i].type != 'ModelsTrack' && AnnoJ.config.tracks[i].path!='Enhancers' ) {
    //         AnnoJ.config.tracks[i]['height'] = track_height;
    //       }
    // }


    var activeTracksIndex=getQueryVariable('tracks').split(':').filter(x => x!="").map(x => parseInt(x,10));
    activeTracksIndex = activeTracksIndex.filter((v, i, a) => a.indexOf(v) === i); // Keep only unique values
    if (activeTracksIndex!="" & celltype=='custom') {
      var ActiveTracks = [];
      var tracks = AnnoJ.config.tracks.map((tr) => tr['id']);
      for (j=0; j<activeTracksIndex.length; j++) {
        ActiveTracks.push(tracks[activeTracksIndex[j]]);
      }
      ActiveTracks = ActiveTracks.filter(function(x) { return x !== undefined; });
      AnnoJ.config.active = ActiveTracks;
    }

    </script>
</head>

<body>

  <noscript>
    <table id='noscript'><tr>
      <td><img src='hs/img/Anno-J.jpg' /></td>
      <td>
        <p>Anno-J cannot run because your browser is currently configured to block Javascript.</p>
        <p>To use the application please access your browser settings or preferences, turn Javascript support back on, and then refresh this page.</p>
        <p>Thankyou, and enjoy the application!<br /></p>
      </td>
    </tr></table>
  </noscript>

</body>

</html>
